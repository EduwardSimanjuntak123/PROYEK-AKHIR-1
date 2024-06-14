@extends('layouts.main')

@section('content')
  
        <div class="container">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahsarpras">
                Tambah Fasilitas
            </button>
@include('modals.modalsarpras')
            <table class="table mt-3 shadow sarpras">
                <thead>

                    <tr class="table-secondary">
                        <th scope="col">Nama sarpras </th>
                        <th scope="col">Jumlah sarpras</th>
                        
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            
                            <td class="p-3 border">{{ $item->nama_sarpras }}</td>
                            <td class="p-3 border">{{ $item->jumlah_sarpras }}</td>
                            <td style="gap:15px; ">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target={{ '#sarprasedit' . $item->id }} data-id="{{ $item->id }}">
                                    <i class="lni lni-pencil"></i>
                                </button>

                                {{-- <a href="{{ route('berita.edit', ['id' => $item->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a> --}}
                                <form action="{{ route('data_sarpras.delete', ['id' => $item->id]) }}" method="POST" 
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0" onclick="window.deleteConfirm(event)"><i class="lni lni-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    @endsection
