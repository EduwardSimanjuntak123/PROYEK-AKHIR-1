@extends('layouts_user.main')
@section('content')
<div class="container-fluid text-center berita">
    <div class="row">
      <div class="col-8 left">
        <h2>{{ $berita->judul }}</h2>
        <div class="container">
          <img src="{{ asset('storage/img/' . $berita->file) }}" width="200" height="150"><br>
          <h6 id="current-date"></h6>
          <p style="text-align: justify">{{ $berita->isi }}</p>
        </div>
      </div>
      <div class="col-4 right">
        @foreach ($beritaku as $berita)
        <div class="side">
          <div class="col-5">
            <img src="{{ asset('storage/img/' . $berita->file) }}" width="100" height="100">
          </div>
          <div class="col-7">
            <h6>{{ $berita->judul }}</h6>
            <a href="{{ route('berita.show', ['id' => $berita->id]) }}">Selengkapnnya</a>
          </div>
        </div>
        @endforeach
      
      </div>
    </div>
  </div>
    <!--Tampilan isi berita-->
@endsection
