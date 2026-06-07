<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['namaprogramstudi','data_fakultas_id'])]
class DataProgramStudi extends Model
{
    public function Datafakultas()
    {
        return $this->belongsTo(DataFakultas::class, 'data_fakultas_id');
    }

    public function Datapembayaran()
    {
        return $this->belongsTo(DataPembayaran::class, 'data_pembayaran_id');
    }
}
