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
                    <div class="card-header">Detail Syarat
                        <div style="float: right;">
                            <a href="{{route('admin.syarat.index')}}" class="btn btn-sm btn-primary">Kembali</a>
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
                                <tr>
                                    <th style="color:white">{{ $syarat->nama }}</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align: justify">
                                            <?= $syarat->syarat?>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
