@extends('layouts.main')

@section('content')
    <div class="container">
       
        

        <div class="modal fade" id="tambahjabatan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Jabatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('jabatan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <input type="text" placeholder="Masukan Nama Galeri" class="form-control" name="jabatan" id="exampleInputEmail1">
                                    @error('jabatan')
                                        <small style="color: brown">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                        
                    </div>
        
                </div>
            </div>
        </div>

        <div class="container mb-3">
            <div style="float:right;" >
                <button type="submit" class="btn btn-success" data-bs-toggle="modal"
            data-bs-target="#tambahjabatan">Tambah Jabatan</button>
                <button type="button " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Jabatan
                </button>
            </div>
        </div>
        <br>



        <div class="container mt-4">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered shadow p-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td> <!-- Ubah logika untuk nomor urut -->
                                <td>{{ $item->NIP }}</td> <!-- Pastikan properti nip tersedia -->
                                <td>{{ $item->nama }}</td> <!-- Pastikan properti nama tersedia -->
                                <td>{{ $item->jenis_kelamin }}</td> <!-- Pastikan properti jenis_kelamin tersedia -->
                                <td> {{ $item->jabatan }}
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target={{ '#editgurudanstaff' . $item->id }} data-id="{{ $item->id }}">
                                        <i class="lni lni-pencil"></i>
                                    </button>
                                    <form action="{{ route('gurustaff.delete', ['id' => $item->id]) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="window.deleteConfirm(event)"><i
                                                class="lni lni-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>

    </div>


    @include('modals.modalgurustaff')
@endsection
