<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table="riwayat";

    protected $fillable = [
        'status',
        'id_berkas',
        'ket'
    ];
}

