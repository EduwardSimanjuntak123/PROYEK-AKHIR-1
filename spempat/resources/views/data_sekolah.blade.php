@extends('layouts_user.main')
@section('content')
<!-- Tampilan awal -->
<div class="container-fluid hero">
    <h1>DATA SEKOLAH</h1>
    <div class="row gambar">
        <div class="col-4 col-md-4">
            <img src="{{ asset('img/Tutwuri.png') }}" width="500" height="500">
        </div>
        <div class="col-4 col-md-4">
            <img src="{{ asset('img/Tutwuri.png') }}" width="500" height="500">
        </div>
        <div class="col-4 col-md-4">
            <img src="{{ asset('img/Tutwuri.png') }}" width="500" height="500">
        </div>
    </div>
    <h1>SMPN 4 BALIGE</h1>
</div>

<div class="list"></div>

<!-- Data Sekolah -->
<div class="container-fluid text-center data">
    <div class="row row-cols-2">
        <div class="col-lg-4 col-5 kiri">
            <div class="satu">
                <h2><i class="bi bi-info-circle"></i>Detail Sekolah</h2>
                <img src="{{ asset('img/Tutwuri.png') }}" width="300" height="300">
                <h4><i class="bi bi-person-fill"></i>Kepala Sekolah : {{ $data_sekolah[0]->nama_kepala_sekolah }}</h4>
                <h4>Operator : {{ $data_sekolah[0]->operator }}</h4>
                <h4>Akreditas : {{ $data_sekolah[0]->akreditas }}</h4>
            </div>
            <div class="dua">
                <h1 style="color:white">Berita Terkini</h1>
                @foreach ($berita as $news)
                    <p><a href="">{{ $news->judul }}</a></p>
                    <hr class="mx-3">
                @endforeach
            </div>
        </div>

        <div class="col-lg-8 col-7 kanan">
            <div class="one">
                <h1>IDENTITAS SEKOLAH</h1>
                <h3>NPSN :{{ $data_sekolah[0]->NPSN }}</h3>
                <h3>Status :{{ $data_sekolah[0]->status }}</h3>
                <h3>Bentuk Pendidikan :{{ $data_sekolah[0]->Bentuk_kepemilikan }}</h3>
                <h3>Status Kepemilikan :{{ $data_sekolah[0]->status_kepemilikan }}</h3>
                <h3>SK Pendirian Sekolah :{{ $data_sekolah[0]->SK_pendirian_sekolah }}</h3>
                <h3>Tanggal SK Pendirian :{{ $data_sekolah[0]->Tanggal_SK_pendirian_sekolah }}</h3>
                <h3>SK Izin Operasional :{{ $data_sekolah[0]->SK_ijin_operasional }}</h3>
                <h3>Tanggal SK Izin Operasional :{{ $data_sekolah[0]->tanggak_SK_ijin_operasional }}</h3>
            </div>
            <div class="two">
                <h1>DATA PELENGKAP</h1>
                <h3>Status BOS :{{ $data_sekolah[0]->status_BOS }}</h3>
                <h3>Sumber listrik :{{ $data_sekolah[0]->Sumber_Listrik }}</h3>
                <h3>Daya listrik :{{ $data_sekolah[0]->Daya_Listrik }}</h3>
                <h3>Kecepatan Internet :{{ $data_sekolah[0]->Kecepatan_Internet }}</h3>
            </div>
            
            <div class="three">
                <h1>DATA ROMBONGAN BELAJAR</h1>
                <h3>SMP NEGERI 4 BALIGE memiliki jumlah rombel sebanyak {{ $total_rombel->total_rombel }}, dengan uraian sebagai berikut :</h3>
                <div class="tabel">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="background-color: #00A9FF;">Tingkat</th>
                                <th style="background-color: #00A9FF;">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>7</td>
                                <td>{{ $data_sekolah[0]->jumlah_tingkat_7 }}</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>{{ $data_sekolah[0]->jumlah_tingkat_8 }}</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>{{ $data_sekolah[0]->jumlah_tingkat_9 }}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>{{ $total_rombel->total_rombel }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="four">
                <h1>DATA SISWA</h1>
                <div class="container tabel">
                    <table class="table table-bordered">
                        <tr>
                            <th style="background-color: #00A9FF; width: 50%;">Jenis Kelamin</th>
                            <th style="background-color: #00A9FF;">Jumlah</th>
                        </tr>
                        <tr>
                            <td>Laki-Laki</td>
                            <td>{{ $data_sekolah[0]->jumlah_laki_laki }}</td>
                        </tr>
                        <tr>
                            <td>Perempuan</td>
                            <td>{{ $data_sekolah[0]->jumlah_perempuan }}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>{{ $total_murid->total }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
