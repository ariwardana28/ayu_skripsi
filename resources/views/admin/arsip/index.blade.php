@extends('layouts.app')

@section('content')
    <div class="countainer">
        <div class="row justify-content-md-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Arsip
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($arsip as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->tgl }}</td>
                                        <td>{{ $item->no_surat }}</td>
                                        <td><a href="{{ route('admin.arsip.show', $item->id) }}" target="_balnk"
                                                class="btn btn-sm btn-info">File</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
