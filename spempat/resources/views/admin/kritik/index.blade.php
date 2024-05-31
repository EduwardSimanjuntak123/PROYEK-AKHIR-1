@extends('layouts.main')

@section('content')
    <h1>Kelola Kritik</h1>
    @foreach($kritiks as $kritik)
        <div>
            <h2>{{ $kritik->nama ?? 'Anonymous' }}</h2>
            <p>{{ $kritik->isi_kritik }}</p>
            <form action="{{ route('kritik.update', $kritik->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label>
                    <input type="checkbox" name="ditampilkan" value="1" {{ $kritik->ditampilkan ? 'checked' : '' }}>
                    Tampilkan
                </label>
                <button type="submit">Update</button>
            </form>
            @foreach($kritik->balasan as $balas)
                <div>
                    <p>{{ $balas->isi_balasan }}</p>
                </div>
            @endforeach
            <form action="{{ route('kritik.reply', $kritik->id) }}" method="POST">
                @csrf
                <textarea name="isi_balasan" placeholder="Balasan"></textarea>
                <button type="submit">Balas</button>
            </form>
        </div>
    @endforeach
@endsection
