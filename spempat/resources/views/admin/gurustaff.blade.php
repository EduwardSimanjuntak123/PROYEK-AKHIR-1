@extends('layouts.main')

@section('content')
    <div class="container">
        <button type="button " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            tambah guru atau staff
        </button>
     
        <div class="m-4">{{ $data->links() }}</div>
        
        <div class="row mt-3">
            @foreach ($data as $key => $item)
                <div class="col mb-5">
                    <div class="card shadow p-3" style="width: 18rem; ">
                        <center><img class="border shadow" src="{{ asset('storage/images/' . $item->file) }}"
                                alt="Gambar berita" style="max-width: 100px;height:100px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->firstItem() + $key }}. {{ $item->nama }}</h5>
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
                            <form action="{{ route('coba', ['id' => $item->id]) }}" method="POST"
                                class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0" onclick="window.deleteConfirm(event)">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
    @include('modals.modalgurustaff')
    
@endsection
