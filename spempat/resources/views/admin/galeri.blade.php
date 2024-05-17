@extends('layouts.main')
@section('content')
    <div class="container">
        <button type="button " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahgaleri">
            tambah photo
        </button>
        <button type="button " class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusgaleri">
         hapus photo
     </button>
        <div class="container mt-3">
        
         <div >
             @foreach ($data as $item)
             
              <img class="border shadow m-1" src="{{ asset('storage/img/' . $item->file) }}" alt="Gambar berita"
        style="max-width: 100%;height:300px;"> 
             @endforeach
         </div>
       
       
        </div>
        
        @include('modals.modalgaleri')
    </div>
    @endsection
