@extends('layouts_user.main') @section('content')
    <div class="container show_berita mt-2">
        <div class="row">
            <div class="col-md-8">
              <h2 class="mt-4">{{ $berita->judul }}</h2>
                <p class="text-muted">Ditulis tanggal {{ $berita->created_at}}</p>
                <img src="{{ asset('storage/img/' . $berita->file) }}" class="img-fluid" alt="Responsive image">
                <p style="text-align:justify" class="mt-4">{{ $berita->isi }}</p>
            </div>
            <div class="col-md-4">
                <div class="row">
                  @foreach ($beritaku as $berita)
                  <a class="list_berita" href="{{ route('berita.show', ['id' => $berita->id]) }}" style="text-decoration: none">
                   <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body" style="display: inline-flex;gap:1rem;">
                              <div class="card-text">
                                    <img src="{{ asset('storage/img/' . $berita->file) }}" style="width: 75px;height: 75px;"  alt="Responsive image">
                                </div>
                                <div class="card-title">{{ $berita->judul }}</div>
                                
                            </div>
                        </div>
                    </div> 
                  </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <style>
      body {
          font-family: sans-serif;
      }
     .container {
          margin-top: 2rem;
      }
     .img-fluid {
          width: 100%;
          height: auto;
      }
     .card {
          border: none;
          box-shadow: 0 4px 8px rgba(0,0,0,0.1);
          transition: 0.3s;
      }
     .card:hover {
          box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      }
     .card-body {
          padding: 2rem;
      }
     .card-title {
          font-size: 1rem;
          font-weight: bold;
          display: flex;
          align-items: center;
      }
     .card-text {
          font-size: 1rem;
      }
     .card-img-top {
          width: 50px;
          height: 50px;
          object-fit: cover;
          border-radius: 50%;
          margin-right: 1rem;
      }
  </style>
@endsection
