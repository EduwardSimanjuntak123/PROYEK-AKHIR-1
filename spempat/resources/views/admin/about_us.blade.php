@extends('layouts.main')
@section('content')
    @foreach ($data as $item)
        <table class="table table-border  caption-top shadow">
            <caption>
                <h1>Tentang Kami</h1>
            </caption>
            <tr>
                <th class="col-md-6 table-secondary">Email</tj>
                <td class="col-md-6 ">{{ $item->email }}</td>
            </tr>
            <tr>
                <th class="col-md-6 table-secondary">Alamat</tj>
                <td class="col-md-6 ">{{ $item->alamat }}</td>
            </tr>
            <tr>
                <th class="col-md-6 table-secondary">No.Telepon</tj>
                <td class="col-md-6 ">{{ $item->no_telepon }}</td>
            </tr>


            <tr>
                <th class="col-md-6 table-secondary">Aksi </th>
                <td class="col-md-6 ">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#{{ 'staticBackdropeditaboutus' . $item->id }}">
                        <i class="lni lni-pencil"></i>
                    </button>
                </td>
            </tr>
        </table>
    @endforeach
    @foreach ($data as $item)
        <div class="modal fade" id={{ 'staticBackdropeditaboutus' . $item->id }} data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Tentang Kami</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('about_us.update', ['id' => $item->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <textarea name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter content">{{ $item->email }}</textarea>

                                        @error('email')
                                            <small style="color: brown">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Enter content">{{ $item->alamat }}</textarea>

                                        @error('alamat')
                                            <small style="color: brown">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No Telepon</label>
                                        <textarea name="no_telepon" class="form-control" id="exampleInputEmail1" placeholder="Enter content">{{ $item->no_telepon }}</textarea>

                                        @error('no_telepon')
                                            <small style="color: brown">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
