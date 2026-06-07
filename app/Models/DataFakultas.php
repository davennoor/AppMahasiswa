<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['namafakultas','foto'])]
class DataFakultas extends Model
{
    public function Dataprogramstudi()
    {
        return $this->hasmany(DataProgramStudi::class,'data_fakultas_id');
    }

    public function Datapembayaran()
    {
        return $this->belongsTo(Datapembayaran::class,'data_pembayaran_id');
    }
}
