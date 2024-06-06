@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Kelola Kritik</h1>
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
                        <th>Tampilkan</th>
                        <th>Aksi</th>
                        <th>Balasan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kritiks as $kritik)
                        <tr>
                            <td>{{ $kritik->nama ?? 'Anonymous' }}</td>
                            <td>{{ $kritik->isi_kritik }}</td>
                            <td>
                                <form action="{{ route('kritik.update', $kritik->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="ditampilkan" value="{{ $kritik->ditampilkan ? '0' : '1' }}">
                                    <button type="submit"
                                        class="btn btn-sm {{ $kritik->ditampilkan ? 'btn-success' : 'btn-secondary' }}">
                                        {{ $kritik->ditampilkan ? 'Ditampilkan' : 'Tampilkan' }}
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('kritik.hide', $kritik->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-warning btn-sm">Sembunyikan</button>
                                </form>

                                <form action="{{ route('kritik.destroy', $kritik->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus kritik ini?')">Hapus</button>
                                </form>
                            </td>
                            <td>
                                @foreach ($kritik->balasan as $balas)
                                    <div class="mb-2">
                                        <p class="mb-1">{{ $balas->isi_balasan }}</p>
                                    </div>
                                @endforeach

                                <form action="{{ route('kritik.reply', $kritik->id) }}" method="POST">
                                    @csrf
                                    <textarea name="isi_balasan" class="form-control mb-2" placeholder="Balasan"></textarea>
                                    <button type="submit" class="btn btn-primary btn-sm">Balas</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
