@extends('layouts_user.main')
@section('content')
    @foreach ($data_sekolah as $data_sekolah)
        <!-- Tampilan awal -->
        <div class="container-fluid hero">
            <h1>DATA SEKOLAH</h1>
            <div class="row gambar">
                <div class="col-4 col-md-4">
                    <img src="{{ asset('img/halaman_ruangguru.jpg') }}" width="500" height="500">
                </div>
                <div class="col-4 col-md-4">
                    <img src="{{ asset('img/hero2.jpg') }}" width="500" height="500">
                </div>
                <div class="col-4 col-md-4">
                    <img src="{{ asset('img/halaman3.jpg') }}" width="500" height="500">
                </div>
            </div>
            <h1>SMPN 4 BALIGE</h1>
        </div>

        <div class="list"></div>

        <!-- Data Sekolah -->
        <div class="container-fluid text-center data">
            <div class="row row-cols-2">
                <div class="col-lg-4 col-5 kiri">
                    <div class="satu shadow">
                        <h2><i class="bi bi-info-circle"></i>Detail Sekolah</h2>
                        <img src="{{ asset('img/Tutwuri.png') }}" width="300" height="300">
                        <h4><i class="bi bi-person-fill"></i>Kepala Sekolah : {{ $data_sekolah->nama_kepala_sekolah }}</h4>
                        <h4>Operator : {{ $data_sekolah->operator }}</h4>
                        <h4>Akreditas : {{ $data_sekolah->akreditas }}</h4>
                    </div>
                    <div class="dua shadow">
                        <h1 style="color:white">Berita Terkini</h1>
                        @foreach ($berita as $berita)
                            <p class="text-start" style="margin-left: 15px"><a href="{{ route('berita.show', ['id' => $berita->id]) }}">{{ $berita->judul }}</a></p>
                            <hr class="mx-3">
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-8 col-7 kanan">
                    <div class="one shadow p-1">
                        <h1>IDENTITAS SEKOLAH</h1>
                        <h3>NPSN :{{ $data_sekolah->NPSN }}</h3>
                        <h3>Status :{{ $data_sekolah->status }}</h3>
                        <h3>Bentuk Pendidikan :{{ $data_sekolah->Bentuk_kepemilikan }}</h3>
                        <h3>Status Kepemilikan :{{ $data_sekolah->status_kepemilikan }}</h3>
                        <h3>SK Pendirian Sekolah :{{ $data_sekolah->SK_pendirian_sekolah }}</h3>
                        <h3>Tanggal SK Pendirian :{{ $data_sekolah->Tanggal_SK_pendirian_sekolah }}</h3>
                        <h3>SK Izin Operasional :{{ $data_sekolah->SK_ijin_operasional }}</h3>
                        <h3>Tanggal SK Izin Operasional :{{ $data_sekolah->tanggak_SK_ijin_operasional }}</h3>
                    </div>
                    <div class="two shadow p-1">
                        <h1>DATA PELENGKAP</h1>
                        <h3>Status BOS :{{ $data_sekolah->status_BOS }}</h3>
                        <h3>Sumber listrik :{{ $data_sekolah->Sumber_Listrik }}</h3>
                        <h3>Daya listrik :{{ $data_sekolah->Daya_Listrik }}</h3>
                        <h3>Kecepatan Internet :{{ $data_sekolah->Kecepatan_Internet }}</h3>
                    </div>

                    <div class="three shadow p-1">
                        <h1>DATA ROMBONGAN BELAJAR</h1>
                        <h3>SMP NEGERI 4 BALIGE memiliki jumlah rombel sebanyak {{ $total_rombel->total_rombel }}, dengan
                            uraian sebagai berikut :</h3>
                        <div class="tabel">
                            <table class="table table-bordered shadow">
                                <thead>
                                    <tr>
                                        <th style="background-color: #00A9FF;">Tingkat</th>
                                        <th style="background-color: #00A9FF;">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>7</td>
                                        <td>{{ $data_sekolah->jumlah_tingkat_7 }}</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>{{ $data_sekolah->jumlah_tingkat_8 }}</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>{{ $data_sekolah->jumlah_tingkat_9 }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>{{ $total_rombel->total_rombel }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="four shadow p-1">
                        <h1>DATA SISWA</h1>
                        <div class="container tabel">
                            <table class="table table-bordered shadow">
                                <tr>
                                    <th style="background-color: #00A9FF; width: 50%;">Jenis Kelamin</th>
                                    <th style="background-color: #00A9FF;">Jumlah</th>
                                </tr>
                                <tr>
                                    <td>Laki-Laki</td>
                                    <td>{{ $data_sekolah->jumlah_laki_laki }}</td>
                                </tr>
                                <tr>
                                    <td>Perempuan</td>
                                    <td>{{ $data_sekolah->jumlah_perempuan }}</td>
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
    @endforeach
@endsection
