@extends('layouts.main')

@section('content')
    @foreach ($data as $item)
        <div class="container">
            <table class="table table-border  caption-top shadow">
                <caption>
                    <h1>DETAIL SEKOLAH</h1>
                </caption>
                <tr>
                    <th class="col-md-6 table-secondary">Nama Kepala Sekolah</tj>
                    <td class="col-md-6 ">{{ $item->nama_kepala_sekolah }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Akreditas</th>
                    <td class="col-md-6 ">{{ $item->akreditas }}</td>
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
            @include('modals.modal')

            <table class="table table-border  caption-top shadow-lg">
                <caption>
                    <h1>IDENTITAS SEKOLAH</h1>
                </caption>
                <tr>
                    <th class="col-md-6 table-secondary">NPSN </tj>
                    <td class="col-md-6 ">{{ $item->NPSN }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Status </th>
                    <td class="col-md-6 ">{{ $item->status }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">SK Pendirian Sekolah</th>
                    <td class="col-md-6 ">{{ $item->SK_pendirian_sekolah }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Tanggal SK Pendirian Sekolah</th>
                    <td class="col-md-6 ">{{ $item->Tanggal_SK_pendirian_sekolah }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">SK Izin Operasional</th>
                    <td class="col-md-6 ">{{ $item->SK_ijin_operasional }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Tanggal SK Izin Operasional</th>
                    <td class="col-md-6 ">{{ $item->tanggal_SK_ijin_operasional }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Aksi </th>
                    <td class="col-md-6 ">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="{{ '#staticBackdropeditindentitassekolah' . $item->id }}">
                            <i class="lni lni-pencil"></i>
                        </button>
                    </td>
                </tr>
            </table>

            <table class="table table-border  caption-top shadow-lg">
                <caption>
                    <h1>DATA PELENGKAP</h1>
                </caption>
                <tr>
                    <th class="col-md-6 table-secondary">Status BOS </tj>
                    <td class="col-md-6 ">{{ $item->status_BOS }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Sumber listrik </th>
                    <td class="col-md-6 ">{{ $item->Sumber_Listrik }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Daya Listrik</th>
                    <td class="col-md-6 ">{{ $item->Daya_Listrik }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Kecepatan Internet</th>
                    <td class="col-md-6 ">{{ $item->Kecepatan_Internet }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Aksi </th>
                    <td class="col-md-6 ">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="{{ '#staticBackdropeditdatapelengkap' . $item->id }}">
                            <i class="lni lni-pencil"></i>
                        </button>
                    </td>
                </tr>
            </table>

            <table class="table table-border  caption-top shadow-lg">
                <caption>
                    <h1>DATA ROMBEL</h1>
                </caption>
                <tr>
                    <th class="col-md-6 table-secondary">Tingkat 7 </tj>
                    <td class="col-md-6 ">{{ $item->jumlah_tingkat_7 }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Tingkat 8 </th>
                    <td class="col-md-6 ">{{ $item->jumlah_tingkat_8 }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Tingkat 9</th>
                    <td class="col-md-6 ">{{ $item->jumlah_tingkat_9 }}</td>
                </tr>
                <tr>
                    <th class="col-md-6 table-secondary">Aksi </th>
                    <td class="col-md-6 ">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="{{ '#staticBackdropeditdatarombel' . $item->id }}">
                            <i class="lni lni-pencil"></i>
                        </button>
                    </td>
                </tr>
            </table>

            <table class="table table-border  caption-top shadow-lg">
                <caption>
                    <h1>DATA SISWA</h1>
                </caption>
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
    @endforeach
@endsection
