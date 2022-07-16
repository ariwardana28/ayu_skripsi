@extends('layouts.app')

@section('content')
    <div class="countainer">
        <div class="row justify-content-md-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Berkas
                        <div style="float: right">
                            <a href="{{ route('berkas.create') }}" class="btn btn-sm btn-primary">+</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Berkas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berkas as $item)
                                    @php
                                        $status = DB::table('riwayat')
                                            ->orderBy('created_at', 'DESC')
                                            ->where('id_berkas', $item->id)
                                            ->first();
                                        // dd($status);
                                        if ($status != null) {
                                            $status->id_berkas;
                                            $stat = $status->status;
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->User->name }}</td>
                                        <td><a href="{{ route('berkas.file', $item->id) }}" target="_balnk"
                                                class="btn btn-sm btn-info">File</a></td>
                                        <td>
                                            <a href="{{ route('riwayat.index', $item->id) }}"
                                                class="btn btn-sm btn-success">Riwayat</a>
                                            @if ($stat == '0')
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal{{ $item->id }}">
                                                    Verifikasi
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Verifikasi
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('berkas.verifikasi', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="">Apakah Anda Ingin Mengirim
                                                                            Berkas ?</label>
                                                                        {{-- <input type="text" readonly
                                                                            value="{{ $item->User->name }}"
                                                                            class="form-control"> --}}
                                                                        <input type="hidden" value="{{ $item->id }}"
                                                                            name="id_berkas" class="form-control">
                                                                        <input type="hidden" name="status" value="1"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($stat == '1')
                                                <a href="#" class="btn btn-sm btn-info">Terkirim</a>
                                            @elseif($stat == '2')
                                                <a href="{{ route('berkas.edit', $item->id) }}"
                                                    class="btn btn-sm btn-warning">Revisi</a>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal{{ $item->id }}">
                                                    Verifikasi
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Verifikasi
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('berkas.verifikasi', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="">Apakah Anda Ingin Mengirim
                                                                            Berkas ?</label>
                                                                        {{-- <input type="text" readonly
                                                                            value="{{ $item->User->name }}"
                                                                            class="form-control"> --}}
                                                                        <input type="hidden" value="{{ $item->id }}"
                                                                            name="id_berkas" class="form-control">
                                                                        <input type="hidden" name="status" value="1"
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
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
