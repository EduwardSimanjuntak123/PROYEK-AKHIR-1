@extends('layouts.main')
@section('content')
    <div class="container">
        <button type="button " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahgaleri">
            Tambah Foto
        </button>
        <button type="button " class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusgaleri">
         Hapus Foto
     </button>
        <div class="container mt-3">
        
         <div >
             @foreach ($data as $item)
             
              <img class="border shadow m-1" src="{{ asset('storage/images/' . $item->file) }}"
        style="max-width: 100%;">
        <p>{{$item->nama_galeri}}</p>
             @endforeach
         </div>
       
       
        </div>
        
        @include('modals.modalgaleri')
    </div>
    @endsection
