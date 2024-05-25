@extends('layouts_user.main')
@section('content')

<div class="container-fluid hero">
    <h1>BERITA TERKINI</h1>
    <div class="row justify-content-evenly gambar">

        <div class="col-md-4">
            <img src="{{ asset('img/1.jpg') }}" alt="hero1">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('img/3.jpg') }}" alt="">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('img/2.jpg') }}" alt="">
        </div>
        <h1>SMPN 4 BALIGE</h1>
    </div>
</div>

<div class="list">
</div>

<!--Tampilan isi berita-->
<div class="container news">
    <div class="text-center">
<h1>{{ $berita->judul }}</h1>
<img src="{{ asset('storage/images/' . $berita->file) }}"  >
    </div>
    
    
    <div class="text-end" >
<em>Dibuat pada: {{ $berita->created_at }}</em>
    </div>
    
    <div class="container">
        <p>{{ $berita->isi }}</p>

        
    </div>
</div>

@endsection
   
