<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Berkas;
use App\Model\Riwayat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerkasController extends Controller
{
    public function index()
    {
        $no = 1;
        $berkas = Berkas::where('id_user', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
        return view('user.berkas.index', compact('no', 'berkas'));
    }

    public function create()
    {
        $user = User::all();
        return view('user.berkas.create', compact('user'));
    }

    public function store(Request $request)
    {
        $berkas = new Berkas();
        $berkas->id_user = $request->id_user;
        $berkas->tanggal = $request->tanggal;
        $berkas->jenis = $request->jenis;
        $berkas->alamat = $request->alamat;
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
        $riwayat->id_user = Auth::user()->id;
        $riwayat->save();
        return redirect('berkas');
    }

    public function file($id)
    {
        $berkas = Berkas::find($id);
        return view('user.berkas.file', compact('berkas'));
    }
    public function verifikasi(Request $request, $id)
    {
        $riwayat = Riwayat::create([
            'status' => $request->status,
            'id_berkas' => $request->id_berkas,
            'id_user' => Auth::user()->id,
            'jenis' => $request->jenis,
        ]);
        return redirect('berkas');
    }
    public function seksi(Request $request, $id)
    {
        $riwayat = Riwayat::create([
            'status' => '3',
            'stsek' => $request->status,
            'id_berkas' => $request->id_berkas,
            'id_user' => Auth::user()->id,
            'jenis' => $request->jenis,
        ]);
        return redirect('berkas');
    }

    public function bidang(Request $request, $id)
    {
        $riwayat = Riwayat::create([
            'status' => '3',
            'stsek' => '3',
            'stbid' => $request->status,
            'id_berkas' => $request->id_berkas,
            'id_user' => Auth::user()->id,
            'jenis' => $request->jenis,
        ]);
        return redirect('berkas');
    }

    public function dinas(Request $request, $id)
    {
        $riwayat = Riwayat::create([
            'status' => '3',
            'stsek' => '3',
            'stbid' => '3',
            'stkep' => $request->status,
            'id_berkas' => $request->id_berkas,
            'id_user' => Auth::user()->id,
            'jenis' => $request->jenis,
        ]);
        return redirect('berkas');
    }

    public function edit($id)
    {
        $berkas = Berkas::find($id);
        return view('user.berkas.edit', compact('berkas'));
    }

    public function update(Request $request, $id)
    {
        $berkas = Berkas::find($id);
        if ($file = $request->file('file') != null) {
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'data/berkas';
            $file->move($tujuan_upload, $nama_file);
            $berkas->file = $nama_file;
        }
        $berkas->save();
        return redirect('berkas');
    }
}
