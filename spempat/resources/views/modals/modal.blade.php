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
                                    <center><img class="border shadow" src="{{ asset('storage/img/' . $item->file) }}"
                                            alt="Gambar Profil" style="max-width: 100px;"></center>
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
                                        value="{{ old('akreditas') }}" id="exampleInputEmail1"
                                        placeholder="{{ $item->akreditas }}">
                                </div>
                                <sup>masukkan hanya 1 karakter huruf misalnya "A"</sup>
                                @error('akreditas')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">Operator</label>
                                    <input type="text" class="form-control" name="operator"
                                        value="{{ $item->operator }}" id="exampleInputEmail1"
                                        placeholder="masukkan judul berita">
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
    <div class="modal fade" id={{ 'staticBackdropeditindentitassekolah' . $item->id }} data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Identitas sekolah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('data_sekolah.update', ['id' => $item->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1">NPSN</label>
                                    <input type="text" class="form-control" name="NPSN"
                                        value="{{ old('NPSN') }}" id="exampleInputEmail1"
                                        placeholder="{{ $item->NPSN }}">
                                </div>
                                @error('NPSN')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">Status</label>
                                    <input type="text" class="form-control" name="status"
                                        value="{{ $item->status }}" id="exampleInputEmail1">
                                </div>
                                <div>
                                    <label for="exampleInputEmail1">Bentuk Kepemilikan</label>
                                    <input type="text" class="form-control" name="Bentuk_kepemilikan"
                                        value="{{ $item->Bentuk_kepemilikan }}" id="exampleInputEmail1">
                                </div>
                                <div>
                                    <label for="exampleInputEmail1">Tanggal SK Pendirian Sekolah</label>
                                    <input type="date" class="form-control" name="Tanggal_SK_pendirian_sekolah"
                                        value="{{ $item->Tanggal_SK_pendirian_sekolah }}" id="exampleInputEmail1">
                                </div>
                                <div>
                                    <label for="exampleInputEmail1">SK Pendirian Sekolah</label>
                                    <input type="text" class="form-control" name="SK_pendirian_sekolah"
                                        value="{{ $item->SK_pendirian_sekolah }}" id="exampleInputEmail1">
                                </div>
                                <div>
                                    <label for="exampleInputEmail1">SK Ijin Operasional</label>
                                    <input type="text" class="form-control" name="SK_ijin_operasional"
                                        value="{{ $item->SK_ijin_operasional }}" id="exampleInputEmail1">
                                </div>
                                <div>
                                    <label for="exampleInputEmail1">Tanggal SK Ijin Operasional</label>
                                    <input type="date" class="form-control" name="tanggak_SK_ijin_operasional"
                                        value="{{ $item->tanggak_SK_ijin_operasional }}" id="exampleInputEmail1">
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($data as $item)
    <div class="modal fade" id={{ 'staticBackdropeditdatapelengkap' . $item->id }} data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Pelengkap</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('data_sekolah.update', ['id' => $item->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1">Status BOS</label>
                                    <input type="text" class="form-control" name="status_BOS"
                                        value="{{ $item->status_BOS }}" id="exampleInputEmail1">
                                </div>
                                <div>
                                    <label for="exampleInputEmail1">Sumber Listrik</label>
                                    <input type="text" class="form-control" name="Sumber_Listrik"
                                        value="{{ $item->Sumber_Listrik }}" id="exampleInputEmail1">
                                </div>
                                <div>
                                    <label for="exampleInputEmail1">Daya Listrik</label>
                                    <input type="text" class="form-control" name="Daya_Listrik"
                                        value="{{ $item->Daya_Listrik }}" id="exampleInputEmail1">
                                </div>
                                <div>
                                    <label for="exampleInputEmail1">Kecepatan Internet</label>
                                    <input type="text" class="form-control" name="Kecepatan_Internet"
                                        value="{{ $item->Kecepatan_Internet }}" id="exampleInputEmail1">
                                </div>
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

@foreach ($data as $item)
    <div class="modal fade" id={{ 'staticBackdropeditdatarombel' . $item->id }} data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Data Rombel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- @foreach ($data as $item) --}}
                    <form action="{{ route('data_sekolah.update', ['id' => $item->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="form-group">

                                <div>
                                    <label for="exampleInputEmail1">Jumlah Tingkat 7</label>
                                    <input type="text" class="form-control" name="jumlah_tingkat_7"
                                        value="{{ $item->jumlah_tingkat_7 }}" id="exampleInputEmail1">
                                </div>
                                @error('jumlah_tingkat_7')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">Jumlah Tingkat 8</label>
                                    <input type="text" class="form-control" name="jumlah_tingkat_8"
                                        value="{{ $item->jumlah_tingkat_8 }}" id="exampleInputEmail1">
                                </div>
                                @error('jumlah_tingkat_8')
                                    <div class="error" style="color: red">{{ $message }}</div>
                                @enderror
                                <div>
                                    <label for="exampleInputEmail1">Jumlah Tingkat 9</label>
                                    <input type="text" class="form-control" name="jumlah_tingkat_9"
                                        value="{{ $item->jumlah_tingkat_9 }}" id="exampleInputEmail1">
                                </div>
                                @error('jumlah_tingkat_9')
                                    <div class="error" style="color: red">{{ $message }}</div>
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
                    <form action="{{ route('data_sekolah.update', ['id' => $item->id]) }}" method="POST"
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
