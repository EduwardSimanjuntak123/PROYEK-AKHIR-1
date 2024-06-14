@extends('layouts_user.main')
@section('content')
    <div class="container all">
        <div class="container-fluid text-center isi ">
            <h1>GALERI SMP NEGERI 4 BALIGE</h1>
        </div>

        <div class="container-fluid text-center foto">
            <div class="row">
                <div>
                    <h2>Achievement</h2>
                </div>
                @foreach ($achievement as $item)
                    <div class="col-xs-12 col-sm-6 col-lg-4 mb-4 achievement">
                        <img class="thumbnail" src="{{ asset('storage/images/' . $item->file) }}"
                            alt="{{ $item->nama_galeri }}">
                        <p>{{ $item->nama_galeri }}</p>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div>
                    <h2>Activity</h2>
                </div>
                @foreach ($activity as $item)
                    <div class="col-xs-12 col-sm-6 col-lg-4 mb-4 activity">
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
