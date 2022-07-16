<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="countainer">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Berkas
                        <div style="float: right">
                            <a href="{{route('berkas.create')}}" class="btn btn-sm btn-primary">+</a>
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
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->tanggal}}</td>
                                        <td>{{$item->User->name}}</td>
                                        <td><a href="{{route('berkas.file',$item->id)}}" target="_balnk" class="btn btn-sm btn-info">File</a></td>
                                        <td>
                                            <a href="{{route('riwayat.index',$item->id)}}" class="btn btn-sm btn-success">Riwayat</a>
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
</body>

</html>
