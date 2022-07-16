<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="countainer">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
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
                                    @if ($stat != '0')
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->User->name }}</td>
                                        <td><a href="{{ route('berkas.file', $item->id) }}" target="_balnk"
                                                class="btn btn-sm btn-info">File</a></td>
                                        <td>
                                            <a href="{{ route('riwayat.index', $item->id) }}"
                                                class="btn btn-sm btn-success">Riwayat</a>

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
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal
                                                                    title
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
                                                                        <input type="text"
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
                                            @else
                                                <a href="#" class="btn btn-sm btn-info">Terkirim</a>
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
</body>

</html>
