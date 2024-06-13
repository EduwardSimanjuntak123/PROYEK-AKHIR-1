@extends('layouts_user.main')
@section('content')
    <!--overflow-->
    <div class="container-fluid scrolldown">
        <h1>Fasilitas-fasilitas yang ada di SMPN 4 BALIGE</h1>
        <div class="container-fluid text-center">
            <div class="row row-cols-2 justify-content-evenly">
                <div class="col-6">
                    <img src="{{ asset('img/2.jpg') }}" width="300" height="300">
                    <h4>Tata Usaha</h4>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/halaman_gerbang3.jpg') }}" width="300" height="300">
                    <h4>Perpustakaan</h4>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/kelas1.jpg') }}" width="300" height="300">
                    <h4>Ruang Kelas</h4>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/dalam_greenhouse.jpg') }}" width="300" height="300">
                    <h4>Kebun Modern</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="list">
    </div>

    <!--Data Sarpras-->
    <div style="background-color: #fff;" class="container-fluid">

        <div class="container-fluid text-center sarpras">
            <div class="row">
                <div class="tabel">
                    <table class="table table-bordered">
                        <thead>
                            <h2>DATA SARANA DAN PRASARANA (SARPRAS)</h2>
                            <tr>
                                <th>No</th>
                                <th>Jenis Sarpras</th>
                                <th>Jumlah Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasilitas as $item)
                                <tr>
                                    <td>{{ ($fasilitas->currentPage() - 1) * $fasilitas->perPage() + $loop->iteration }}
                                    </td>
                                    <td>{{ $item->nama_sarpras }}</td>
                                    <td>{{ $item->jumlah_sarpras }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>
                        <div style="float: right">{{ $fasilitas->links() }}<< /div>/div>
                        </div>

                    </div>
                </div>
            </div>
        @endsection
        <!--fasilitas-->
