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
                                    <th>Surat</th>
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
                                            $stkep = $status->stkep;
                                        } else {
                                            $stat = 0;
                                        }
                                    @endphp
                                    @if ($stat != '0')
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->User->name }}</td>
                                            <td><a href="{{ route('berkas.file', $item->id) }}" target="_balnk"
                                                    class="btn btn-sm btn-info">File</a></td>
                                            <td>
                                                <a href="{{ route('riwayat.index', $item->id) }}"
                                                    class="btn btn-sm btn-info">Riwayat</a>

                                                @if ($stat == '1')
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                                        Verifikasi
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $item->id }}"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Verifikasi
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('admin.berkas.verifikasi', $item->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="">Nama</label>
                                                                            <input type="text" readonly
                                                                                value="{{ $item->User->name }}"
                                                                                class="form-control">
                                                                            <input type="hidden"
                                                                                value="{{ $item->id }}"
                                                                                name="id_berkas" class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Status</label>
                                                                            <select name="status" class="form-control"
                                                                                id="">
                                                                                <option value="">Pilih Status</option>
                                                                                <option value="2">Revisi</option>
                                                                                <option value="3">Setujui</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Halaman</label>
                                                                            <input type="text" class="form-control"
                                                                                name="hal">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Bagian</label>
                                                                            <input type="text" class="form-control"
                                                                                name="bagian">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Keterangan</label>
                                                                            <textarea name="ket" id="" cols="30" rows="10" class="form-control"></textarea>
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
                                                @elseif ($stat == '2')
                                                    <a href="#" class="btn btn-sm btn-warning">Direvisi</a>
                                                @elseif ($stat == '3')
                                                    <a href="#" class="btn btn-sm btn-success">Diterima</a>
                                                @endif


                                            </td>
                                            <td>
                                                @if ($stkep == '3')
                                                    @if ($item->no_surat == null)
                                                        <button type="button" class="btn btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#exampleModal{{ $item->id }}">
                                                            Surat Pengesahan
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal{{ $item->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Surat Pengesahan
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form
                                                                        action="{{ route('admin.berkas.update', $item->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="">Nama</label>
                                                                                <input type="text" readonly
                                                                                    value="{{ $item->User->name }}"
                                                                                    class="form-control">
                                                                                <input type="hidden"
                                                                                    value="{{ $item->id }}"
                                                                                    name="id_berkas" class="form-control">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">No Surat</label>
                                                                                <input type="text" name="no_surat"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Berlaku Dari</label>
                                                                                <input type="date" name="dari"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">Berlaku
                                                                                    Sampai</label>
                                                                                <input type="date" name="sampai"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <a href="{{ route('admin.berkas.show', $item->id) }}"
                                                            class="btn btn-sm btn-success">Lihat Surat Pengesahan</a>
                                                        <button type="button" class="btn btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#exampleModal{{ $item->id }}">
                                                            Upload Berkas
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal{{ $item->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Upload Berkas Arsip
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form
                                                                        action="{{ route('admin.arsip.store', $item->id) }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="">No Surat</label>
                                                                                <input type="hidden" name="id_berkas" class="form-control" readonly value="{{$item->id}}">
                                                                                <input type="text" name="no_surat" class="form-control" readonly value="{{$item->no_surat}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">No Surat</label>
                                                                                <input type="date" name="tgl" class="form-control" readonly value="{{date("Y-m-d")}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="">File</label>
                                                                                <input type="file" name="file" class="form-control" readonly >
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @else
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
