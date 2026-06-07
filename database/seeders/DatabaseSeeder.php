<?php

namespace Database\Seeders;

use App\Models\DataCalonMahasiswa;
use App\Models\DataFakultas;
use App\Models\DataLaporan;
use App\Models\DataPembayaran;
use App\Models\DataProgramStudi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'Name' => 'Daven',
            'Email' => 'daven@gmail',
            'Password'=>bcrypt(12345),
            'Role'=>'Admin'
        ]);

        User::create([
            'Name' => 'Anime',
            'Email' => 'anime@gmail',
            'Password'=>bcrypt(12345),
            'Role'=>'Mahasiswa'
        ]);

         DataCalonMahasiswa::create([
            'NIK'=>'123456789',
            'Namalengkap'=>'Daven Star',
            'Alamat'=>'Distrik Tokyo',
            'JenisKelamin'=>'Laki-Laki',
            'Agama'=>'Islam',
            'Tempatlahir'=>'Seoul',
            'Tanggallahir'=>'2000-08-17',
            'Nohp'=>'08912345',
            'LulusanTahun'=>2018,
            'user_id'=>1
        ]);


        DataFakultas::create([
            'Namafakultas'=>'Fakultas Ilmu Komputer',
            'foto'=>'images/ilkom.jpg'
        ]);

        DataFakultas::create([
            'Namafakultas'=>'Fakultas Teknik',
            'foto'=>'images/teknik.jpg'
        ]);

        DataFakultas::create([
            'Namafakultas'=>'Fakultas Kedokteran',
            'foto'=>'images/kedokteran.jpg'
        ]);

         DataProgramStudi::create([
            'Namaprogramstudi'=>'Pendidikan Dokter',
            'data_fakultas_id'=>3,
        ]);

         DataProgramStudi::create([
            'Namaprogramstudi'=>'Farmasi',
            'data_fakultas_id'=>3,
        ]);

         DataProgramStudi::create([
            'Namaprogramstudi'=>'Teknik Elektro',
            'data_fakultas_id'=>2,
        ]);

         DataProgramStudi::create([
            'Namaprogramstudi'=>'Teknik Mesin',
            'data_fakultas_id'=>2,
        ]);
        

        DataProgramStudi::create([
            'Namaprogramstudi'=>'Artificial Intelegence',
            'data_fakultas_id'=>1,
        ]);

        DataProgramStudi::create([
            'Namaprogramstudi'=>'Sistem Informasi',
            'data_fakultas_id'=>1,
        ]);

        DataProgramStudi::create([
            'Namaprogramstudi'=>'Ilmu Komputer',
            'data_fakultas_id'=>1,
        ]);

        DataPembayaran::create([
            'data_calon_mahasiswa_id'=>1,
            'Namalengkap'=>'Daven Star',
            'data_fakultas_id'=>1,
            'Namafakultas'=>'Fakultas Ilmu Komputer',
            'data_program_studi_id'=>1,
            'Namaprogramstudi'=>'Artificial Intelegence',
            'Status'=>'lunas',
            'Hargabayar'=>20000
        ]);

        DataLaporan::Create([
            'Namalengkap'=>'Daven Star',
            'Namafakultas'=>'Fakultas Ilmu Komputer',
            'Namaprogramstudi'=>'Artifial Intelegence',
            'data_pembayaran_id'=>1,
            ]);
    }
}

