@extends('layouts_user.main')
@section('content')
<div class="container-fluid hero">
    @foreach ($data_sekolah as $item)
    <h1>DATA SEKOLAH</h1>
    <div class="row justify-content-evenly gambar">

        <div class="col-md-3">
            <img src="{{ asset('img/Tutwuri.png') }}" alt="">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('img/Tutwuri.png') }}" alt="">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('img/Tutwuri.png') }}" alt="">
        </div>
        <h1>SMPN 4 BALIGE</h1>
    </div>
</div>

<div class="list">
</div>

<!--data sekolah-->
<div class="container-fluid text-center data">
    <div class="row row-cols-2">

        <div class="col-md-4 kiri">
            <div class="col-12 satu shadow">
                <h2><i class="bi bi-info-circle"></i>Detail Sekolah</h2>
                <img src="{{ asset('img/Tutwuri.png') }}" alt="">
                <h4><i class="bi bi-person-fill"></i>Kepala Sekolah : {{ $item->nama_kepala_sekolah }}</h4>
                <h4>Operator : {{ $item->operator }}</h4>
                <h4>Akreditas : {{ $item->akreditas }}</h4>
            </div>
            <div class="col-12 dua shadow">
                <h1>Berita Terkini</h1>
                @foreach ($berita as $berita)
                <p><i><a href="#">{{ $berita->judul }}</a></i></p>
                <hr>
                @endforeach
                
               
            </div>
        </div>

    

        <div class="col-md-8 kanan ">
            <div class="col-12 one shadow">
                <h1>IDENTITAS SEKOLAH</h1>
                <h3>NPSN : {{ $item->NPSN }}</h3>
                <h3>Status : {{ $item->status}}</h3>
                <h3>Bentuk Kepemilikan :{{ $item->Bentuk_kepemilikan }}</h3>
                <h3>Status Kepemilikan :{{ $item->status_kepemilikan }}</h3>
                <h3>SK Pendirian Sekolah :{{ $item->SK_pendirian_sekolah }}</h3>
                <h3>Tanggal SK Pendirian: {{ $item->Tanggal_SK_pendirian_sekolah }}</h3>
                <h3>SK Izin Operasional: {{ $item->SK_ijin_operasional }} </h3>
                <h3>Tanggal SK Izin Operasional:{{ $item->tanggak_SK_ijin_operasional }}</h3>
            </div>
            <div class="col-12 two shadow">
                <h1>DATA PELENGKAP</h1>
                <h3>Status BOS : {{ $item->status_BOS }}</h3>
                <h3>Sumber listrik : {{ $item->Sumber_Listrik }}</h3>
                <h3>Daya listrik : {{ $item->Daya_Listrik }}</h3>
                <h3>Kecepatan Internet : {{ $item->Kecepatan_Internet }}</h3>
                <h3>Luas Tanah : </h3>
            </div>
            <div class="col-12 three shadow">
                <h1>DATA ROMBONGAN BELAJAR</h1>
                <h3>SMP NEGERI 4 BALIGE memiliki jumlah rombel sebanyak {{ $total_siswa->total }}, dengan uraian sebagai berikut :</h3>
                <div class="row row-cols-2 total ">
                    <div class="col">
                        <h6 style="background: #00A9FF;">Tingkat</h6>
                    </div>
                    <div class="col">
                        <h6 style="background: #00A9FF;">Jumlah</h6>
                    </div>
                    <div class="col">
                        <h6>7</h6>
                    </div>
                    <div class="col">
                        <h6>123</h6>
                    </div>
                    <div class="col">
                        <h6>8</h6>
                    </div>
                    <div class="col">
                        <h6>120</h6>
                    </div>
                    <div class="col">
                        <h6>9</h6>
                    </div>
                    <div class="col">
                        <h6>500</h6>
                    </div>
                    <div class="col">
                        <h6>Total</h6>
                    </div>
                    <div class="col">
                      
                        <h6>{{ $total_siswa->total }}</h6>    
                       
                        
                    </div>
                </div>
            </div>
            <div class="col-12 four shadow">
                <h1>DATA SISWA</h1>
                <div class="row row-cols-2 total">
                    <div class="col">
                        <h6 style="background: #00A9FF;">Jenis Kelamin</h6>
                    </div>
                    <div class="col">
                        <h6 style="background: #00A9FF;">Jumlah</h6>
                    </div>
                    <div class="col">
                        <h6>Laki-laki</h6>
                    </div>
                    <div class="col">
                        <h6>{{ $item->jumlah_laki_laki }}</h6>
                    </div>
                    <div class="col">
                        <h6>Perempuan</h6>
                    </div>
                    <div class="col">
                        <h6>{{ $item->jumlah_perempuan }}</h6>
                    </div>
                    <div class="col">
                        <h6>Total</h6>
                    </div>
                    <div class="col">
                        <h6>{{ $total_siswa->total }}</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endforeach
@endsection
<!--tampilan awal-->
