<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nik','namalengkap','alamat','jeniskelamin','tempatlahir','tanggallahir','agama','nohp','lulusantahun','user_id'])]
class DataCalonMahasiswa extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Datapembayaran()
    {
        return $this->belongsTo(DataPembayaran::class,'data_calon_mahasiswa_id');
    }
}
