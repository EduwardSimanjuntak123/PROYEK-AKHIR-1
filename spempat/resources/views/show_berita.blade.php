@extends('layouts_user.main')
@section('content')
    <div class="hero">
        <div class="container-fluid">
            <h1>BERITA TERKINI</h1>
            <div class="row gambar ">
                <div class="gambar" style="justify-content:center; display:flex;">
                    <div class="col-4 col-md-4">
                        <img src="{{ asset('img/halaman_ruangguru.jpg') }}" width="400" height="500">
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="{{ asset('img/hero2.jpg') }}" width="400" height="500">
                    </div>
                    <div class="col-4 col-md-4">
                        <img src="{{ asset('img/halaman3.jpg') }}" width="400" height="500">
                    </div>
                </div>
            </div>
        </div>


        <div class="list">
        </div>

        <!--Tampilan isi berita-->
        <div class="container text-center news my-5">
            <h2>{{ $berita->judul }}</h2>
            <img src="{{ asset('storage/img/' . $berita->file) }}" width="100" height="100" class="img-fluid"
                alt="News Image">
            <div class="container-fluid mt-3">
                <h6>Tanggal publish: {{ $berita->created_at }}</h6>
                <p>{{ $berita->isi }}</p>
            </div>
        </div>

    </div>
    <!--Tampilan isi berita-->
@endsection
