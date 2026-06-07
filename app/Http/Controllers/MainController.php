<?php

namespace App\Http\Controllers;

use App\Models\DataCalonMahasiswa;
use App\Models\DataFakultas;
use App\Models\DataLaporan;
use App\Models\DataPembayaran;
use App\Models\DataProgramStudi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
     public function register()
    {
        return view('mahasiswa.register');
    }

    public function postregister(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5',
        ]);

        if(strlen($request->password) < 5)
            {
                return back()->with('error','Password Kurang Dari 5');
            }
        else
        {

        

        User::create([
            'name'=>$request->nama,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'mahasiswa'
        ]);

        return redirect()->route('loginkuy')->with('info', 'register berhasillll');
        }
    }



    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $attempt = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        if(Auth::attempt($attempt))
            {
                $user = Auth::User();
                if($user->role == 'admin')
                    {
                        return redirect()->route('dashboardkuy')->with('info','Selamat datang '. $user->name);
                    }
                else
                    {
                        return redirect()->route('daftarkuy')->with('info','Selamat Datang '.$user->name);
                    }
            }
        return back()->with('error','email atau password salah');
    }


   

    public function daftar()
    {
        
         $userId = Auth::id();//ai
         $sudahDaftar = DataCalonMahasiswa::where('user_id', $userId)->exists();//ai

        if ($sudahDaftar) 
        {
            return redirect()->route('datakuy')->with('sudahdaftar', 'Halo ');
        }
        else
        {
            return view('mahasiswa.daftar');
        }
        
    }

    public function postdaftar(Request $request, User $user)
    {
        //$fakultas = DataFakultas::all();
        $request->validate([
            'nik'=>'required|unique:data_calon_mahasiswas,nik',
            'namalengkap'=>'required',
            'alamat'=>'required',
            'jk'=>'required',
            'agama'=>'required',
            'tempatlahir'=>'required',
            'tanggallahir'=>'required',
            'nohp'=>'required',
            'lulusantahun'=>'required',
        ]);

        DataCalonMahasiswa::create([
            'nik'=>$request->nik,
            'namalengkap'=>$request->namalengkap,
            'alamat'=>$request->alamat,
            'jeniskelamin'=>$request->jk,
            'agama'=>$request->agama,
            'tempatlahir'=>$request->tempatlahir,
            'tanggallahir'=>$request->tanggallahir,
            'nohp'=>$request->nohp,
            'lulusantahun'=>$request->lulusantahun,
            'user_id'=>Auth::id()
        ]);
        return redirect()->route('pilihfakultaskuy')->with('info','Pendaftaran Berhasil, Selamat Datang'.$user->name);
        
    }


    public function dashboard()
    {
        $data = DataCalonMahasiswa::all();
        return view('admin.data',compact('data'));
    }

    public function data()
    {
       // Cari data mahasiswa yang punya user_id sesuai dengan orang yang login,ai at line 143
        $datamahasiswa = DataCalonMahasiswa::where('user_id', Auth::id())->first();
        $datapembayaran = DataPembayaran::where('data_calon_mahasiswa_id', $datamahasiswa->id)->first();

        return view('mahasiswa.data',compact('datamahasiswa','datapembayaran'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('loginkuy');
    }

    public function pembayaran(DataProgramStudi $programstudi)
    {
        $datacalonmahasiswa = DataCalonMahasiswa::where('user_id', Auth::id())->first();
        return view('mahasiswa.pembayaran',compact('programstudi','datacalonmahasiswa'));
    }

    public function postpembayaran(Request $request)
    {
         $datacalonmahasiswa = DataCalonMahasiswa::where('user_id', Auth::id())->first();
         $sudahbayar = DataPembayaran::where('data_calon_mahasiswa_id', $datacalonmahasiswa->id)->exists();//ai

        if ($sudahbayar) 
        {
            return redirect()->route('datakuy')->with('sudahbayar', 'Halo ');
        }
        $request->validate([
            'data_program_studi_id'=>'required'
        ]);

        
        $prodi = DataProgramStudi::with('Datafakultas')->find($request->data_program_studi_id);

        $datapembayaran = DataPembayaran::create([
            'data_calon_mahasiswa_id'=>$datacalonmahasiswa->id,
            'namalengkap'=>$datacalonmahasiswa->namalengkap,
            'data_fakultas_id'=>$prodi->data_fakultas_id,
            'namafakultas'=>$prodi->Datafakultas->namafakultas,
            'data_program_studi_id'=>$prodi->id,
            'namaprogramstudi'=>$prodi->namaprogramstudi,
            'hargabayar'=>0,
            'status'=>'pending'

        ]);

        DataLaporan::create([
            'namalengkap'=>$datapembayaran->namalengkap,
            'namafakultas'=>$datapembayaran->namafakultas,
            'namaprogramstudi'=>$datapembayaran->namaprogramstudi,
            'data_pembayaran_id'=>$datapembayaran->id,
        ]);
        return redirect()->route('datakuy')->with('bayar','Proses Berhasil');
    }
    

    public function pilihfakultas()
    {
        $fakultas = DataFakultas::all();
        return view('fakultas',compact('fakultas'));
    }

    public function adminlaporan()
    {
    $data = DataLaporan::all();
    return view('admin.laporan', compact('data'));
    }

    public function adminpembayaran()
    {
        $data = DataPembayaran::all();
        return view('admin.pembayaran',compact('data'));
    }

    public function editpembayaran(DataPembayaran $pembayaran)
    {
        return view('admin.editpembayaran',compact('pembayaran'));
    }

    public function posteditpembayaran(Request $request,DataPembayaran $datapembayaran)
    {
        $validate = $request->validate([
            'status'=>'required'
        ]);
        $datapembayaran->update($validate);

        return redirect()->route('adminpembayarankuy');
    }

    

}
