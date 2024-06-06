@extends('layouts_user.main')
@section('content')
    <div class="container-fluid tampilan">
    </div>

    <div class="container-fluid text-center kalimat">
        <div class="row">
            <div class="col-4 col-md-2 word">
                <h2>Galeri</h2>
            </div>
            <div class="col-8 col-md-10 text">
                <marquee behavior="right" direction="">
                    <h3>Telusuri kami dan temukan keindahan dalam setiap momen yang ada</h3>
                </marquee>
            </div>
        </div>
    </div>

    <div class="container all">
        <div class="container-fluid text-center isi">
            <h1>GALERI SMP NEGERI 4 BALIGE</h1>
        </div>

        <div class="container-fluid text-center foto">
            <div class="row">
                @foreach ($galeri as $item)
                    <div class="col-xs-12 col-sm-6 col-lg-4 mb-4">
                        <img class="thumbnail" src="{{ asset('storage/images/' . $item->file) }}"
                            alt="{{ $item->nama_galeri }}">
                        <p>{{ $item->nama_galeri }}</p>
                    </div>
                @endforeach
            </div>

            <div id="modal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="fullImage">
            </div>
        </div>
    </div>
    </div>
@endsection
