<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index($id){
        $no = 1;
        $riwayat = Riwayat::where('id_berkas',$id)->get();
        return view('user.riwayat.index',compact('no','riwayat'));
    }
}
