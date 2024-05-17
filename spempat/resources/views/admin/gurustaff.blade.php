@extends('layouts.main')

@section('content')
    <div class="container">
        <button type="button " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            tambah guru atau staff
        </button>
        <div class="row mt-3">
            @foreach ($data as $item)
                <div class="col mb-5">
                    <div class="card shadow p-3" style="width: 18rem; ">
                        <center><img class="border shadow" src="{{ asset('storage/img/' . $item->file) }}"
                                alt="Gambar berita" style="max-width: 100px;height:100px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama }}</h5>
                            </div>
                        </center>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">jenis kelamin : {{ $item->jenis_kelamin }}</li>
                            <li class="list-group-item">TTL:
                                {{ $item->alamat_lahir }} \ {{ $item->tanggallahir }}</li>
                        </ul>
                        <div class="card-body">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editgurudanstaff">
                                edit
                            </button>
                            <form action="{{ route('coba', ['id' => $item->id]) }}" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    @include('modals.modalgurustaff')
    
@endsection
