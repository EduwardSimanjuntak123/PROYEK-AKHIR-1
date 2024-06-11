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
                            <input type="text" placeholder="Masukan Nama Galeri" class="form-control" name="nama_galeri" id="exampleInputEmail1">
                            @error('nama_galeri')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kategori Galeri</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kategori" id="achievement" value="achievement">
                                <label class="form-check-label" for="achievement">Achievement</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kategori" id="activity" value="activity">
                                <label class="form-check-label" for="activity">Activity</label>
                            </div>
                            @error('kategori')
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


