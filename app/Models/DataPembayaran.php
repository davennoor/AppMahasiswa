<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['data_calon_mahasiswa_id',
            'namalengkap',
            'namaprogramstudi',
            'data_program_studi_id',
            'namafakultas',
            'data_fakultas_id',
            'status',
            'hargabayar'])]
            
class DataPembayaran extends Model
{
    public function Datafakultas()
    {
        return $this->hasMany(DataFakultas::class);
    }

    public function Dataprogramstudi()
    {
        return $this->hasMany(DataProgramStudi::class,);
    }

    public function Datacalonmahasiswa()
    {
        return $this->hasMany(DataCalonMahasiswa::class,'data_calon_mahasiswa_id');
    }

    public function Datalaporan()
    {
        return $this->hasMany(DataLaporan::class);
    }
}
