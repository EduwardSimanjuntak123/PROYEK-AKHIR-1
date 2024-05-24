<div class="modal fade" id="tambahsarpras" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Sarpras</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('data_sarpras.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Sarpras</label>
                            <input type="text" class="form-control" name="nama_sarpras" id="exampleInputEmail1"
                                placeholder="masukkan nama sarpras">
                            @error('nama_guru')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jumlah Sarpras</label>
                            <input type="text" class="form-control" name="jumlah_sarpras" id="exampleInputEmail1"
                                placeholder="masukkan jumlah">
                            @error('alamat_lahir')
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
 {{-- modal untuk edit sarpras --}}
<div class="modal fade" id="{{ 'sarprasedit' . $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Sarpras</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('data_sarpras.update',['id'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama sarpras</label>
                            <input type="text" class="form-control" name="nama_sarpras" id="exampleInputEmail1"
                               value="{{ $item->nama_sarpras }}">
                            @error('nama_guru')
                                <small style="color: brown">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">jumlah sarpras</label>
                            <input type="text" class="form-control" name="jumlah_sarpras" id="exampleInputEmail1"
                            value="{{ $item->jumlah_sarpras }}">
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
@endforeach
