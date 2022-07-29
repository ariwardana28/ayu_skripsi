@extends('layouts.app')

@section('content')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        td {
            color: white;
        }

        th {
            color: white;
        }

    </style>
    <div class="container-sm">
        <div class="step-one">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Tambah Syarat
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif(session('danger'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('danger') }}
                        </div>
                    @endif
                </div>
                <form action="{{ route('admin.visi.update',$visi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Judul</label>
                                        <input type="text" class="form-control " name="bidang" placeholder="Enter Visi"
                                            value="{{$visi->bidang}}" >
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
                                        <script>
                                             tinymce.init({
                                               selector: 'textarea#editor', });
                                        </script>
                                        <label for="isi">Text</label>
                                        <textarea type="text" id="editor" name="ket" rows="30px">{{$visi->ket}}</textarea>
                                        <span class="text-danger">
                                            @error('isi')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <a href="{{ route('admin.visi.index') }}" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
