@extends('layouts.app')

@section('content')
    <style>
        td {
            color: white;
        }

        th {
            color: white;
        }
    </style>
    <div class="container">
        <div class="row justify-content-div">
            <div class="col">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">visi
                        <div style="float: right">
                            <a href="{{ route('admin.visi.create') }}" class="btn btn-sm btn-primary">+</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered" id="zero_config">
                                <thead>
                                    <tr>
                                        <th style="color:white">No</th>
                                        <th style="color:white">Jenis</th>
                                        <th style="color:white">Isi</th>
                                        <th style="color:white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visi as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->bidang }}</td>
                                            <td>{{ $item->ket }}</td>
                                            <td>
                                                <a href="{{ route('admin.visi.edit', $item->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                               
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
    </div>
@endsection
