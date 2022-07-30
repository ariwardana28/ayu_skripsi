<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Berkas;
use App\Model\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerkasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $no = 1;
        $berkas = Berkas::orderBy('created_at','DESC')->get();
        return view('admin.berkas.index', compact('no', 'berkas'));
    }

    public function verifikasi(Request $request, $id)
    {
        if($request->status == '3'){
            $stsek = '1';
        }else{
            $stsek = '0';
        }
        $riwayat = Riwayat::create([
            'status' => $request->status,
            'stsek' => $stsek,
            'id_user' => Auth::user()->id,
            'id_berkas' => $request->id_berkas,
            'hal' => $request->hal,
            'bagian' => $request->bagian,
            'ket' => $request->ket,
        ]);
        return redirect('admin/berkas');
    }

    public function update(Request $request,$id){
        $berkas = Berkas::find($id);
        $berkas->no_surat = $request->no_surat;
        $berkas->dari = $request->dari;
        $berkas->sampai = $request->sampai;
        $berkas->save();
        return redirect('admin/berkas');
    }
    public function show($id){
        $berkas = Berkas::find($id);
        return view('admin.berkas.show', compact('berkas'));
    }
    public function print($id){
        $berkas = Berkas::find($id);
        return view('admin.berkas.print', compact('berkas'));
    }
}
