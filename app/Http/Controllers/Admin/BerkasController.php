<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Berkas;
use App\Model\Riwayat;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $no = 1;
        $berkas = Berkas::all();
        return view('admin.berkas.index', compact('no', 'berkas'));
    }

    public function verifikasi(Request $request, $id)
    {
        $riwayat = Riwayat::create([
            'status' => $request->status,
            'id_berkas' => $request->id_berkas,
            'ket' => $request->ket,
        ]);
        return redirect('admin/berkas');
    }
}
