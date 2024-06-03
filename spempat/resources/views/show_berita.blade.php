@extends('layouts_user.main')
@section('content')

<div class="container-fluid hero">
    <h1>BERITA TERKINI</h1>
    <div class="row gambar">
        <div class="col-4 col-md-4">
            <img src="{{ asset('img/1.jpg') }}" width="500" height="500">
        </div>
        <div class="col-4 col-md-4">
            <img src="{{ asset('img/2.jpg') }}" width="500" height="500">
        </div>
        <div class="col-4 col-md-4">
            <img src="{{ asset('img/3.jpg') }}" width="500" height="500">
        </div>
    </div>

    <div class="list">
    </div>

    <!--Tampilan isi berita-->
    <div class="container-fluid text-center news">
        <h1>{{ $berita->judul }}</h1>
        <img class="shadow" src="{{ asset('storage/images/'. $berita->file) }}" width="800" height="400">
        
        <div class="container-fluid">
            <p>{{ $berita->isi }} </p>

        </div>
        <h2>Tanggal publish: {{ $berita->created_at }}</h2>
    </div>


@endsection
   
