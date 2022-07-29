<?php

namespace App\Http\Controllers;

use App\Model\Visi;
use Illuminate\Http\Request;

class DepanController extends Controller
{
    public function index(){
        $visi = Visi::all();
        return view('welcome',compact('visi'));
    }
}
