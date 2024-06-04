@extends('layouts.main')
@section('content')
    <div class="container">
        <button type="button " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahgaleri">
            Tambah Foto
        </button>
        
        <div class="container mt-3">
            <div>
                @foreach ($data as $item)
                    <div class="image-container"
                        style=" display: inline-block;
                    width: 200px;
                    height: 300px;
                    overflow: hidden;
                    margin: 1em;
                    text-align: center;">
                        <img class="border shadow m-1"
                            style="width: 100%;
                        height: 200px;
                        object-fit: cover; "
                            src="{{ asset('storage/images/' . $item->file) }}" alt="{{ $item->nama_galeri }}">
                        <p style="margin: 0.5em 0;">{{ $item->nama_galeri }}</p>
                        <form action="{{ route('galeri.delete', ['id' => $item->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">hapus</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        @include('modals.modalgaleri')
    </div>
@endsection
