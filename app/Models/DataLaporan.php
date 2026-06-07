<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['namalengkap','namafakultas','namaprogramstudi','data_pembayaran_id'])]
class DataLaporan extends Model
{
    public function Datapembayaran()
    {
        return $this->belongsTo(Datapembayaran::class,'data_pembayaran_id');
    }
}
