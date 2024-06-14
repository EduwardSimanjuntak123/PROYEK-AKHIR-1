@extends('layouts.main')

@section('content')
<div class="container">
    <div class="container">
        <table class="table table-border caption-top shadow">
            <caption>
                <h3>Detail Sekolah</h3>
            </caption>
            @foreach ($data as $item)
                <tr>
                    <th class="col-md-6 table-secondary">Nama Kepala Sekolah</tj>
                    <td class="col-md-6 ">{{ $item->nama_kepala_sekolah }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Akreditas</th>
                    <td class="col-md-6 ">{{ $item->akreditas }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Tahun Ajaran</th>
                    <td class="col-md-6 ">{{ $item->tahun_ajaran }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Operator</th>
                    <td class="col-md-6 ">{{ $item->operator }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Aksi </th>
                    <td class="col-md-6 ">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="{{ '#staticBackdropeditdetailsekolah' . $item->id }}">
                            <i class="lni lni-pencil"></i>
                        </button>
                    </td>
                </tr>
        </table>
        @endforeach
        @include('modals.modal')



        <table class="table table-border caption-top shadow-lg">
            <caption>
                <h3>Data Siswa</h3>
            </caption>
            @foreach ($data_siswa as $item)
                <tr>
                    <th class="col-md-6 table-secondary">Jumlah siswa kelas 7</tj>
                    <td class="col-md-6 ">{{ $item->jumlah_tingkat_7 }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Jumlah siswa kelas 8</tj>
                    <td class="col-md-6 ">{{ $item->jumlah_tingkat_8 }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Jumlah siswa kelas 9 </tj>
                    <td class="col-md-6 ">{{ $item->jumlah_tingkat_9 }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Laki-Laki </tj>
                    <td class="col-md-6 ">{{ $item->jumlah_laki_laki }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Perempuan </th>
                    <td class="col-md-6 ">{{ $item->jumlah_perempuan }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Aksi </th>
                    <td class="col-md-6 ">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="{{ '#staticBackdropeditdatasiswa' . $item->id }}">
                            <i class="lni lni-pencil"></i>
                        </button>
                    </td>
                </tr>
        </table>
    </div>
</div>
    
    @endforeach
@endsection
