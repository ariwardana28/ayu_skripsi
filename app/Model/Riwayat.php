<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table="riwayat";

    protected $fillable = [
        'status',
        'id_berkas',
        'id_user',
        'stsek',
        'stbid',
        'stkep',
        'ket',
        'hal',
        'bagian',
    ];

    public function User(){
        return $this->belongsTo('App\User','id_user','id');
    }
}

