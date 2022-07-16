<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Berkas;
use App\Model\Riwayat;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index(){
        $no = 1;
        $berkas = Berkas::all();
        return view('user.berkas.index',compact('no','berkas'));
    }

    public function create(){
        return view('user.berkas.create');
    }

    public function store(Request $request){
        $berkas = new Berkas();
        $berkas->id_user = $request->id_user;
        $berkas->tanggal = $request->tanggal;
        if ($file = $request->file('file') != null) {
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'data/berkas';
            $file->move($tujuan_upload, $nama_file);
            $berkas->file = $nama_file;
        }
        $berkas->save();
        $riwayat = new Riwayat();
        $riwayat->id_berkas = $berkas->id;
        $riwayat->save();
        return redirect('berkas');
    }

    public function file($id){
        $berkas = Berkas::find($id);
        return view('user.berkas.file',compact('berkas'));
    }
}
