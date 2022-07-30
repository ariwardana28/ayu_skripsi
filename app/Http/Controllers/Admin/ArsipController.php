<?php

namespace App\Http\Controllers\Admin;

use App\Model\Arsip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index(){
        $no = 1;
        $arsip = Arsip::orderBy('created_at','DESC')->get();
        return view('admin.arsip.index', compact('arsip','no'));
    }
    public function show($id){
        $arsip = Arsip::find($id);
        return view('admin.arsip.show',compact('arsip'));
    }
    public function store(Request $request){
        $arsip = new Arsip();
        if ($file = $request->file('file') != null) {
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'data/arsip';
            $file->move($tujuan_upload, $nama_file);
            $arsip->file = $nama_file;
        }
        $arsip->id_berkas = $request->id_berkas;
        $arsip->tgl = $request->tgl;
        $arsip->no_surat = $request->no_surat;
        $arsip->save();
        return redirect('/admin/berkas');
    }
}
