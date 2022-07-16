@extends('layouts.app')

@section('content')
    <div class="countainer">
        <div class="row justify-content-md-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tambah Berkas</div>
                    <div class="card-body">
                        <form action="{{ route('berkas.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" value="{{Auth::user()->name}}" readonly>
                                <input type="hidden" name="id_user" class="form-control" value="{{Auth::user()->id}}">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Berkas</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
