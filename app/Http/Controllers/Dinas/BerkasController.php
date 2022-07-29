<?php

namespace App\Http\Controllers\Dinas;

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
        return view('dinas.berkas.index', compact('no', 'berkas'));
    }

    public function verifikasi(Request $request, $id)
    {
        $us = Auth::user()->id;
        $riwayat = Riwayat::create([
            'status' => '3',
            'stsek' => '3',
            'stbid' => '3',
            'stkep' =>  $request->status,
            'id_user' =>$us,
            'id_berkas' => $request->id_berkas,
            'hal' => $request->hal,
            'bagian' => $request->bagian,
            'ket' => $request->ket,
        ]);
        return redirect('dinas/berkas');
    }   
}
