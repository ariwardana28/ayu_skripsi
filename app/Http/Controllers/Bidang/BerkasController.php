<?php

namespace App\Http\Controllers\Bidang;

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
        return view('bidang.berkas.index', compact('no', 'berkas'));
    }

    public function verifikasi(Request $request, $id)
    {
        if ($request->status == '3') {
            $stkep = '1';
        } else {
            $stkep = '0';
        }
        $us = Auth::user()->id;
        $riwayat = Riwayat::create([
            'status' => '3',
            'stsek' => '3',
            'stbid' => $request->status,
            'stkep' => $stkep,
            'id_user' =>$us,
            'id_berkas' => $request->id_berkas,
            'hal' => $request->hal,
            'bagian' => $request->bagian,
            'ket' => $request->ket,
        ]);
        return redirect('bidang/berkas');
    }   
}
