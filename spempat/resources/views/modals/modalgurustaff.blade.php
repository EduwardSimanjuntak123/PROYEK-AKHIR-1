<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">tambah gurustaff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gurustaff.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Guru Staff</label>
                            <input type="text" class="form-control" name="nama_guru" id="exampleInputEmail1"
                                placeholder="masukkan nama guru\staff">
                            @error('nama_guru')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gambar</label>
                            <input type="file" class="form-control" name="photo" id="exampleInputEmail1">
                            @error('photo')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                            <input type="radio" id="laki-laki" name="jeniskelamin" value="L">
                            <label for="laki-laki">Laki-laki</label><br>
                            <input type="radio" id="perempuan" name="jeniskelamin" value="P">
                            <label for="perempuan">Perempuan</label><br>
                            @error('jeniskelamin')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">tanggallahir</label>
                            <input type="date" id="tanggallahir" name="tanggallahir">

                        </div>
                        @error('tanggallahir')
                            <small style="color: brown">{{ $message }}</small>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">alamat lahir</label>
                            <input type="text" class="form-control" name="alamat_lahir" id="exampleInputEmail1"
                                placeholder="masukkan alamat lahir">
                            @error('alamat_lahir')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                        <button type="submit" class="btn btn-primary">tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



@foreach ($data as $item)
 <div class="modal fade" id="editgurudanstaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Guru dan Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Guru Staff</label>
                            <input type="text" class="form-control" name="nama_guru" id="exampleInputEmail1"
                                value="{{ $item->nama_guru }}">
                            @error('nama_guru')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                            <input type="radio" id="laki-laki" name="jeniskelamin" value="L">
                            <label for="laki-laki">Laki-laki</label><br>
                            <input type="radio" id="perempuan" name="jeniskelamin" value="P">
                            <label for="perempuan">Perempuan</label><br>
                            @error('jeniskelamin')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">tanggallahir</label>
                            <input type="date" id="tanggallahir" name="tanggallahir"
                                value="{{ $item->tanggallahir }}">

                        </div>
                        @error('tanggallahir')
                            <small style="color: brown">{{ $message }}</small>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">alamat lahir</label>
                            <input type="text" class="form-control" name="alamat_lahir" id="exampleInputEmail1"
                                placeholder="masukkan alamat lahir" value="{{ $item->alamat_lahir }}">
                            @error('alamat_lahir')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Understood</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
   
@endforeach
