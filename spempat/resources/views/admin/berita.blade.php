@extends('layouts.main')

@section('content')
    {{-- menambah berita --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">tambah berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">judul berita</label>
                                <input type="text" class="form-control" name="judul" id="exampleInputEmail1"
                                    placeholder="masukkan judul berita"  value="{{ old('photo') }}">
                                @error('judul')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gambar</label>
                                <input type="file" class="form-control" name="photo" id="exampleInputEmail1" value="{{ old('photo') }}">
                                @error('photo')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">isi berita</label>
                                    <textarea name="isi" class="form-control" id="exampleInputEmail1" placeholder="masukkan isi berita"></textarea>
                                
                                @error('isi')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>



                        </div>
                        <!-- /.card-body -->

                        {{-- <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Understood</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- mengedit berita --}}
    @foreach ($data as $item)
        <div class="modal fade" id={{ 'staticBackdropedit' . $item->id }} data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Berita {{ $item->id }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- @foreach ($data as $item) --}}
                        <form action="{{ route('berita.update',['id'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="form-group">
                                    @if ($item->file)
                                   <center><img class="border shadow" src="{{ asset('storage/img/'.$item->file) }}" alt="Gambar Profil" style="max-width: 100px;"></center> 
                        
                                    @endif
                                    <label for="exampleInputEmail1">judul berita</label>
                                    <input type="text" class="form-control" name="judul" value="{{ $item->judul }}"
                                        id="exampleInputEmail1" placeholder="masukkan judul berita">
                                    @error('judul')
                                        <small style="color: brown">{{ $message }}</small>
                                    @enderror
                                </div>
                            
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">isi berita</label>
                                    <textarea name="isi" class="form-control" id="exampleInputEmail1" placeholder="Enter content">{{ $item->isi }}</textarea>

                                    @error('nama')
                                        <small style="color: brown">{{ $message }}</small>
                                    @enderror


                                </div>



                            </div>
                            <!-- /.card-body -->

                            {{-- <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> --}}
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Understood</button>
                            </div>
                        </form>
                        {{-- @endforeach --}}
                    </div>

                </div>
            </div>
        </div>
    @endforeach

    @php
        $selectedBeritaId = 0;
    @endphp


    <div class="container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            tambah berita
        </button>
        
        <table class="table mt-3 shadow">
            <thead>

                <tr class="table-secondary">
                    <th scope="col">gambar </th>
                    <th scope="col">Judul Berita</th>
                    <th scope="col">Isi Berita</th>
                    <th scope="col">ACTION</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="">
                            <img class="border shadow" src="{{ asset('storage/img/' . $item->file) }}" alt="Gambar berita"
                                style="max-width: 100px;height:100px;">
                            
                        </td>
                        <td class="p-3 border">{{ $item->judul }}</td>
                        <td class="p-3 border">{{ $item->isi }}</td>
                        <td style="gap:15px; ">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target={{ '#staticBackdropedit' . $item->id }} data-id="{{ $item->id }}">
                                <i class="lni lni-pencil"></i>
                            </button>
                           
                            {{-- <a href="{{ route('berita.edit', ['id' => $item->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a> --}}
                            <form action="{{ route('berita.delete',['id'=>$item->id]) }}" method="POST" type="button" class="btn btn-danger p-0"
                                onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0"><i class="lni lni-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



  
@endsection
