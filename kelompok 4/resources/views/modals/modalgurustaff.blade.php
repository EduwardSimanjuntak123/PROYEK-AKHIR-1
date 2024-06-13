<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Guru Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gurustaff.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_guru">Nama Guru/Staff</label>
                            <input type="text" class="form-control" name="nama" id="nama_guru" placeholder="Masukkan nama guru/staff">
                            @error('nama')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_guru">NIP</label>
                            <input type="text" class="form-control" name="NIP" id="nama_guru" placeholder="Masukkan nama guru/staff">
                            @error('NIP')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label><br>
                            <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki">
                            <label for="laki-laki">Laki-laki</label><br>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                            <label for="perempuan">Perempuan</label><br>
                            @error('jenis_kelamin')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                
                      
                        
                        <!-- Input untuk jabatan (role) -->
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select name="jabatan_id" id="jabatan" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->jabatan }}</option>
                                @endforeach
                            </select>
                            @error('jabatan_id')
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



@foreach ($data as $item)
<div class="modal fade" id="{{ 'editgurudanstaff' . $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Guru dan Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gurustaff.update', ['id' => $item->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Guru Staff</label>
                            <input type="text" class="form-control" name="nama_guru" id="exampleInputEmail1"
                                value="{{ old('nama_guru', $item->nama) }}">
                            @error('nama_guru')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_guru">NIP</label>
                            <input type="text" class="form-control" name="NIP" id="nama_guru" placeholder="Masukkan nama guru/staff"
                                value="{{ old('NIP', $item->NIP) }}">
                            @error('NIP')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                            <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki"
                                {{ old('jenis_kelamin', $item->jenis_kelamin) == 'Laki-Laki' ? 'checked' : '' }}>
                            <label for="laki-laki">Laki-laki</label><br>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"
                                {{ old('jenis_kelamin', $item->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}>
                            <label for="perempuan">Perempuan</label><br>
                            @error('jenis_kelamin')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select name="jabatan_id" id="jabatan" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ old('jabatan_id', $item->jabatan_id) == $role->id ? 'selected' : '' }}>
                                        {{ $role->jabatan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jabatan_id')
                                <small style="color: brown">{{ $message }}</small>
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
