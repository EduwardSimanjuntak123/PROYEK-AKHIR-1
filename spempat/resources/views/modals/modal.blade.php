@foreach ($data as $item)
    <div class="modal fade" id={{ 'staticBackdropeditdetailsekolah' . $item->id }} data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Detail Sekolah {{ $item->id }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('data_sekolah.update', ['id' => $item->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                @if ($item->file)
                                    <center><img class="border shadow"
                                            src="{{ asset('storage/images/' . $item->file) }}" alt="Gambar Profil"
                                            style="max-width: 100px;"></center>
                                @endif
                                <div>
                                    <label for="exampleInputEmail1">Nama Kepala Sekolah</label>
                                    <input type="text" class="form-control" name="nama_kepala_sekolah"
                                        value="{{ $item->nama_kepala_sekolah }}" id="exampleInputEmail1">
                                </div>
                                @error('nama_kepala_sekolah')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">Akreditasi</label>
                                    <input type="text" class="form-control" name="akreditas"
                                        value="{{ $item->akreditas }}" id="exampleInputEmail1"
                                        placeholder="">
                                </div>
                                <sup>masukkan hanya 1 karakter huruf misalnya "A"</sup>
                                @error('akreditas')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">Operator</label>
                                    <input type="text" class="form-control" name="operator"
                                        value="{{ $item->operator }}" id="exampleInputEmail1"
                                        placeholder="Masukkan Judul Berita">
                                </div>
                                @error('operator')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
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




@foreach ($data as $item)
    <div class="modal fade" id={{ 'staticBackdropeditdatasiswa' . $item->id }} data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('data_siswa.update', ['id' => $item->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1">Jumlah Laki-Laki</label>
                                    <input type="text" class="form-control" name="jumlah_laki_laki"
                                        value="{{ $item->jumlah_laki_laki }}" id="exampleInputEmail1">
                                </div>
                                @error('jumlah_laki_laki')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">Jumlah Perempuan</label>
                                    <input type="text" class="form-control" name="jumlah_perempuan"
                                        value="{{ $item->jumlah_perempuan }}" id="exampleInputEmail1">
                                </div>
                                @error('jumlah_perempuan')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">jumlah_tingkat_7</label>
                                    <input type="text" class="form-control" name="jumlah_tingkat_7"
                                        value="{{ $item->jumlah_tingkat_7 }}" id="exampleInputEmail1">
                                </div>
                                @error('jumlah_tingkat_7')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">jumlah_tingkat_8</label>
                                    <input type="text" class="form-control" name="jumlah_tingkat_8"
                                        value="{{ $item->jumlah_tingkat_8 }}" id="exampleInputEmail1">
                                </div>
                                @error('jumlah_tingkat_8')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">jumlah_tingkat_9</label>
                                    <input type="text" class="form-control" name="jumlah_tingkat_9"
                                        value="{{ $item->jumlah_tingkat_9 }}" id="exampleInputEmail1">
                                </div>
                                @error('jumlah_tingkat_7')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
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
