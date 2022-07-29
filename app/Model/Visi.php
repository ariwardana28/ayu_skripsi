<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    protected $table ='visi';

    protected $fillable=[
        'bidang',
        'ket',
    ];
}
