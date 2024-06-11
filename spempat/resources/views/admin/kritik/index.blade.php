@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Ulasan</th>
                        <th>Balasan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kritiks as $kritik)
                        <tr>
                            <td style="width: 100px">{{ $kritik->nama ?? 'Anonymous' }}</td>
                            <td>{{ $kritik->isi_kritik }}</td>
                            <td>
                                @foreach ($kritik->balasan as $balas)
                                    <div class="mb-2">
                                        <p class="mb-1">{{ $balas->isi_balasan }}</p>
                                    </div>
                                @endforeach
                            </td>
                            <td style="width: 100px">
                                <div style="display: inline-flex; gap:0.5rem;">
                                    <form action="{{ route('kritik.update', $kritik->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="ditampilkan"
                                            value="{{ $kritik->ditampilkan ? '0' : '1' }}">
                                        <button type="submit"
                                            class="btn btn-sm {{ $kritik->ditampilkan ? 'btn-warning' : 'btn-success' }}">
                                            {{ $kritik->ditampilkan ? 'Sembunyikan' : 'Tampilkan' }}
                                        </button>
                                    </form>
                                    <form action="{{ route('kritik.destroy', $kritik->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus kritik ini?')">Hapus</button>
                                    </form>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#balasan{{ $kritik->id }}">Balas</button>
                                </div>

                                <!-- Modal balasan -->
                                <div class="modal fade" id="balasan{{ $kritik->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Buat Balasan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('kritik.reply', ['id' => $kritik->id]) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Masukkan Balasan Anda</label>
                                                            <input type="text" class="form-control" name="isi_balasan"
                                                                id="exampleInputEmail1">
                                                            @error('isi_balasan')
                                                                <small style="color: brown">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
