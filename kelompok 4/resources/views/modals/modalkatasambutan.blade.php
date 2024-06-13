@foreach ($data as $item)
    <div class="modal fade" id={{ 'staticBackdropeditkatasambutan' . $item->id }} data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Kata Sambutan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kata_sambutan.update', ['id' => $item->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Isi Kata Sambutan</label>
                                    <textarea name="isi" class="form-control" id="exampleInputEmail1" placeholder="Enter content">{{ $item->isi }}</textarea>

                                    @error('isi')
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

    <div class="modal fade" id={{ 'staticBackdroptambahkatasambutan'}} data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Kata Sambutan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kata_sambutan.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Isi Kata Sambutan</label>
                                    <textarea name="isi" class="form-control" id="exampleInputEmail1" placeholder="Enter content"></textarea>

                                    @error('isi')
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
