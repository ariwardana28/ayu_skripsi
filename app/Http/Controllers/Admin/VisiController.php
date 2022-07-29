<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function index(){
        $no = 1;
        $visi = Visi::all();
        return view('admin.visi.index',compact('visi','no'));
    }

    public function create(){
        return view('admin.visi.create');
    }

    public function store(Request $request){
        $simpan = Visi::create($request->all());
        return redirect('visi');
    }

    public function edit($id){
        $visi = Visi::find($id);
        return view('admin.visi.edit',compact('visi'));
    }

    public function update(Request $request,$id){
        $visi = Visi::find($id);
        $visi->bidang = $request->bidang;
        $visi->ket = $request->ket;
        $visi->save();
        return redirect('visi');
    }
}
