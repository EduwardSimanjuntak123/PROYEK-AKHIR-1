@extends('layouts.main')
@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahgaleri">
            Tambah Foto
        </button>

        <div class="container mt-3">
            <h2 class="mb-3 text-center">Achievement</h2>
            <div class="row">
                @foreach ($achievement as $item)
                    <div class="col-md-3 image-container text-center">
                        <img class="border shadow m-1" src="{{ asset('storage/images/' . $item->file) }}"
                            alt="{{ $item->nama_galeri }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <p style="margin: 0.5em 0;">{{ $item->nama_galeri }}</p>
                        <form action="{{ route('galeri.delete', ['id' => $item->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="window.deleteConfirm(event)">hapus</button>
                        </form>
                    </div>
                @endforeach
            </div>

            <h2 class="mb-3 mt-5 text-center">Activity</h2>
            <div class="row">
                @foreach ($activity as $item)
                    <div class="col-md-3 image-container text-center">
                        <img class="border shadow m-1" src="{{ asset('storage/images/' . $item->file) }}"
                            alt="{{ $item->nama_galeri }}" style="width: 100px; height: 100px; object-fit: cover;">
                        <p style="margin: 0.5em 0;">{{ $item->nama_galeri }}</p>
                        <form action="{{ route('galeri.delete', ['id' => $item->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="window.deleteConfirm(event)">hapus</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        @include('modals.modalgaleri')
    </div>
@endsection
