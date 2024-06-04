@extends('layouts_user.main')
@section('content')
    <div class="container-fluid hero">
        <h1>BERITA TERKINI</h1>
        <div class="row gambar">
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
        </div>

        <div class="list">
        </div>

        <!--Tampilan isi berita-->
        <div class="container text-center news">
            <h2>{{ $berita->judul }}</h2>
            <img src="{{ asset('storage/img/' . $berita->file) }}">
            <h6>Tanggal publish: {{ $berita->created_at }}</h6>
            <div class="container-fluid">
                <p>{{ $berita->isi }} </p>
            </div>
        </div>


        <!--Tampilan isi berita-->
    @endsection
