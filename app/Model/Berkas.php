<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = "berkas";

    public function User(){
        return $this->belongsTo('App\User','id_user','id');
    }
}
