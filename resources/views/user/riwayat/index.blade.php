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
                                    <th>Halaman</th>
                                    <th>Bagiam</th>
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
                                            <td>{{ $item->hal }}</td>
                                            <td>{{ $item->bagian }}</td>
                                            <td>{{ $item->ket }}</td>
                                            <td>
                                                @if ($item->status == '1')
                                                    Terkirim
                                                @elseif ($item->status == '2')
                                                    Direvisi
                                                @elseif ($item->status == '3')
                                                    Diterima
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
