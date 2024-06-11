@extends('layouts.main')
@section('content')
    
    <div class="container">
        <div class="mb-3 text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="{{ '#staticBackdroptambahkatasambutan' }}">
               Tambah Kata Sambutan
            </button>
        </div>
        <table class="table table-border shadow">
            <thead>
                <tr>
                    <th class="text-center">Kata Sambutan</th>
                   
                    <th class="text-center">Tampilkan</th> 
                    <th class="text-center">Aksi</th> <!-- Kolom untuk radio button -->
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="col-md-4">{{ $item->isi }}</td>
                        <td class="col-md-2 text-center">
                            <form action="{{ route('update-tampilkan-ke-user', $item->id) }}" method="POST">
                                @csrf
                                <input type="radio" name="tampilkan_ke_user" value="{{ $item->id }}" {{ $item->tampilkan_ke_user ? 'checked' : '' }} onchange="this.form.submit()">
                                @if ($item->tampilkan_ke_user)
                                Ditampilkan
                            @else
                               <p></p>
                            @endif
                            </form>
                        </td>
                        <td class="col-md-2 text-center">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="{{ '#staticBackdropeditkatasambutan' . $item->id }}">
                                <i class="lni lni-pencil"></i>
                            </button>
                            <form action="{{ route('kata_sambutan.delete', ['id' => $item->id]) }}" method="POST"
                                class="d-inline" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="window.deleteConfirm(event)"><i
                                        class="lni lni-trash-can"></i></button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('modals.modalkatasambutan')
@endsection
