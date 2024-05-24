<div class="modal fade" id="tambahgaleri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Gambar</label>
                            <input type="file" class="form-control" name="photo" id="exampleInputEmail1">
                            @error('photo')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Galeri</label>
                            <input type="text" placeholder="Masukan Nama Galeri" class="form-control" name="Nama_Galeri" id="exampleInputEmail1">
                            @error('Nama_Galeri')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="hapusgaleri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Hapus Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data as $item)
                    {{ $item->id }}. {{ $item->nama_galeri}}<form
                        action="{{ route('galeri.delete', ['id' => $item->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">hapus</button>
                    </form><br>
                @endforeach



            </div>

        </div>
    </div>
</div>
