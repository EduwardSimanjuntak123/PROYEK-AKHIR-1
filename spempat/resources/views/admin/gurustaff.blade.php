@extends('layouts.main')

@section('content')
    <div class="container">
        <button type="button " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Guru atau Staff
        </button>

        <div class="m-4">{{ $data->links() }}</div>

        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered shadow p-3">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{ $data->firstItem() + $key }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target={{ '#editgurudanstaff' . $item->id }} data-id="{{ $item->id }}">
                                    <i class="lni lni-pencil"></i>
                                </button>
                                <form action="{{ route('gurustaff.delete', ['id' => $item->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="window.deleteConfirm(event)"><i class="lni lni-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('modals.modalgurustaff')
@endsection
