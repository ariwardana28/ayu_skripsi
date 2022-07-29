@extends('layouts.app')

@section('content')
    <div class="countainer">
        <div class="row justify-content-md-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <center>KOREKSI DRAFT PERATURAN PERUSAHAAN {{ Auth::user()->name }}</center>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Halaman</th>
                                    <th>Bagian</th>
                                    <th>Hasil Koreksi / Perbaikan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $item)
                                    @if ($item->status != '0')
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->User->name }}</td>
                                            <td>{{ $item->hal }}</td>
                                            <td>{{ $item->bagian }}</td>
                                            <td>{{ $item->ket }}</td>
                                            <td>
                                                @if ($item->status == '1')
                                                    Terkirim
                                                @elseif ($item->status == '2')
                                                    Direvisi
                                                @else
                                                    @if ($item->status == '3' && $item->stsek == '1')
                                                        Terkirim
                                                    @elseif ($item->status == '3' && $item->stsek == '2')
                                                        Direvisi
                                                    @else
                                                        @if ($item->status == '3' && $item->stsek == '3' && $item->stbid == '1')
                                                            Terkirim
                                                        @elseif ($item->status == '3' && $item->stsek == '3' && $item->stbid == '2')
                                                            Revisi
                                                        @else
                                                            @if ($item->status == '3' && $item->stsek == '3' && $item->stbid == '3' && $item->stkep == '1')
                                                                Terkirim
                                                            @elseif ($item->status == '3' && $item->stsek == '3' && $item->stbid == '3' && $item->stkep == '2')
                                                                Revisi
                                                            @else
                                                                Diterima
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
