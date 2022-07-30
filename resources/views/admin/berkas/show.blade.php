@extends('layouts.app')

@section('content')
    <style>
        td {
            text-align: justify;
            font-family: 'Times New Roman', Times, serif;
            font-size: 13px
        }

        b {
            text-align: justify;
            font-family: 'Times New Roman', Times, serif;
            font-size: 14px
        }
    </style>
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = [
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        ];
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    } ?>
    <div class="countainer">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Surat Pengesahan
                        <div style="float: right">
                            <a href="{{route('admin.berkas.print',$berkas->id)}}" class="btn btn-sm btn-primary">Print</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <center>
                            <b>
                                KEPUTUSAN <br>
                                KEPALA DINAS TENAGA KERJA KOTA SAMARINDA <br>
                                <i>Nomor : {{ $berkas->no_surat }}</i><br>
                                TENTANG <br>
                                PENGESAHAAN PERATURAN PERUSAHAAN (P.P) <br><br>
                                KEPALA DINAS TENAGA KERJA <br>
                                KOTA SAMARINDA
                                <hr>
                            </b>
                        </center>
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td>Membaca</td>
                                <td>:</td>
                                <td>
                                    Surat Permohonan Pengesahan Peraturan Perusahaan(P.P) dari perusahaan
                                    {{ $berkas->User->name }}
                                    <br> <i>nomor : 008/NBEks/VIII/2021</i><b style="color: white">.....</b> tanggal : 12
                                    Agustus 2021
                                </td>
                            </tr>
                            <tr>
                                <td>Membimbing</td>
                                <td>:</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-1">a.</div>
                                        <div class="col-md-10">
                                            bahwa Peraturan Perusahaan(P.P) dari perusahaan tersebut di atas, setelah
                                            diadakan
                                            penelitian, telah memenuhi syarat untuk disahkan sebagaimana yang dimaksud
                                            dengan
                                            Peraturan Mentri Ketenagakerjaan Nomor : Per. 28 Tahun 2014 tanggal 31 Desember
                                            2014.
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">b.</div>
                                            <div class="col-md-10">
                                                bahwa untuk itu perlu dikeluarkan Keputusan Pengesahannya.
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Mengingat</td>
                                <td>:</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-1">1.</div>
                                        <div class="col-md-10">
                                            Undang-Undang Nomor : 13 Tahun 2013 Tentang Ketenagakerjaan;
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">2.</div>
                                        <div class="col-md-10">
                                            Undang-Undang Nomor : 23 Tahun 2014 Tentang Pemerintah Daerah;
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">3.</div>
                                        <div class="col-md-10">
                                            Undang-Undang Nomor : 11 Tahun 2020 Tentang Cipta Kerja;
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">4.</div>
                                        <div class="col-md-10">
                                            Keputusan Mentri Tenaga Kerja dan Transmigrasi Nomor : Kep. 28 Tahun 2014
                                            tentang Tata Cara Pembuatan dan Pengesahan Peraturan Perusahaan serta Pembuatan
                                            dan Pendaftaran Perjanjan Kerja Bersama.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">5.</div>
                                        <div class="col-md-10">
                                            Peraturan Daerah Nomor 4 Tahun 2016 tentang Pembentukan dan Susunan Perangkat
                                            Daerah;
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">6.</div>
                                        <div class="col-md-10">
                                            Peraturan Wali Kota Samarinda Nomor 30 Tahun 2016 Tentang Susunan Organisasi dan
                                            Tata Kerja Dinas Tenaga Kerja Kota Samarinda;
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">
                                    <center><b>MEMUTUSKAN</b></center>
                                </td>
                            </tr>
                            <tr>
                                <td>Menetapkan</td>
                                <td>:</td>
                            </tr>
                            <tr>
                                <td>PERTAMA</td>
                                <td>:</td>
                                <td>
                                    Mengesahkan Peraturan Perusahaan dari:
                                    <div class="row">
                                        <div class="col-3">Nama Perusahaan</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">{{ $berkas->User->name }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Alamat Perusahaan</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">{{ $berkas->alamat }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">Jenis Usaha</div>
                                        <div class="col-1">:</div>
                                        <div class="col-8">{{ $berkas->jenis }}</div>
                                    </div>
                                    dengan ketentuan jika hak-hak dan fasilitas-fasilitas yang telah diberikan oleh
                                    perushaan ini kepada pekerja secara kontinyu baik berdasarkan perjanjian/peraturan
                                    tertulis atau lisan, akan tetapi tidak tercantum atau tercantum kurang dalam peraturan
                                    ini, tetap diberikan kepada pekerja yang berhak.
                                </td>
                            </tr>
                            <tr>
                                <td>KEDUA</td>
                                <td>:</td>
                                <td>
                                    Peraturan Perusahaan tersebut di atas berlaku terhitung mulai tanggal
                                    <?php $tgl = date('Y-m-d', strtotime($berkas->dari)); ?>
                                    <b style="font-size: 12px">{{ tgl_indo($tgl) }}</b> sampai tanggal <?php $tgl_sampai = date('Y-m-d', strtotime($berkas->sampai)); ?>
                                    <b style="font-size: 12px">{{ tgl_indo($tgl_sampai) }}</b>.
                                </td>
                            </tr>
                            <tr>
                                <td>KETIGA</td>
                                <td>:</td>
                                <td>
                                    Perusahaan wajib memberitahukan dan menjelaskan isi serta memberikan naskah peraturan
                                    perusahaan kepada pekerja/buruh.
                                </td>
                            </tr>
                            <tr>
                                <td>KEEMPAT</td>
                                <td>:</td>
                                <td>
                                    Dalam masa berlaku Peraturan Perusahaan sebagaimana dimaksud dalam AMAR KEDUA dilakukan
                                    perubahan tersebut, maka perubahaan tersebut harus diberitahukan kepada pekerja/buruh
                                    atau Serikat Pekerja / Serikat Buruh di perusahaan, dan mendapat pengesahan dari Dinas
                                    Tenaga Kerja Kota Samarinda
                                </td>
                            </tr>
                            <tr>
                                <td>KELIMA</td>
                                <td>:</td>
                                <td>
                                    Dalam hal tedapat ketentuan yang diatur dalam Peraturan Perusahaan sebagaimana dimaksud
                                    AMAR PERTAMA bertentangan dengan peraturan perundang-undangan yang berlaku, maka
                                    ketentuan yang bertentangan tersebut batal demi hukum dan yang berlaku adalah peraturan
                                    perundang-undangan yang berlaku.
                                </td>
                            </tr>
                            <tr>
                                <td>KEENAM</td>
                                <td>:</td>
                                <td>
                                    Bilamana ternyata dalam Peraturan Perusahaan(P.P) ini terdapat kekeliruan didalam
                                    pengajuan data-data atau keterangan-keterangan yang menjadi dasar dari pada Peraturan
                                    Perusahaan ii, atau terdapat kesalahan/kekeliruan dalam pembuatan Keputusan ini, maka
                                    bagian yang bersangkutan dari peraturan ini dapat dibatalka dan atau diperbaiki
                                    sebagaimana semestinya.
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div style="float: right;">
                                        Dikeluarkan di : <br>
                                        Pada Tanggal :<b
                                            style="color: white">...................................................</b><br>
                                        <center>
                                            <br>
                                            <b>
                                                Plt.KEPALA DINAS
                                                <br>
                                                <br>
                                                <br>
                                                M. WAHYONO HP., SH, M.Si
                                            </b>
                                        </center>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
