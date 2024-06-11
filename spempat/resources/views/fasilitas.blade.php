@extends('layouts_user.main')
@section('content')
    <div class="container-fluid text-center word">
        <div class="row">
            <div class="col ok">
                <img src="{{ asset('img/kelas3.jpg') }}" alt="foto_1" width="285" height="285">
                <img src="{{ asset('img/taman.jpg') }}" alt="foto_2" width="285" height="285">
                <img src="{{ asset('img/kelas1.jpg') }}" alt="foto_3" width="285" height="285">
            </div>
            <div class="col">
                <h1>FASILITAS</h1>
                <h2>SMPN 4 BALIGE</h2>
                <p>Fasilitas yang nyaman membentuk suasana pembelajaran yang damai dan mendukung</p>
            </div>
        </div>
    </div>

    <div class="list1">
    </div>

    <div class="list">
    </div>

    <!--overflow-->
    <div class="container-fluid scrolldown scroll">
        <h1>Fasilitas-fasilitas yang ada di SMPN 4 BALIGE</h1>
        <div class="container-fluid text-center">
            <div class="row row-cols-2 justify-content-evenly">
                <div class="col-6">
                    <img src="{{ asset('img/1.jpg') }}" width="300" height="300">
                    <h2>Tata Usaha</h2>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/taman.jpg') }}" width="300" height="300">
                    <h2>Taman</h2>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/kelas1.jpg') }}" width="300" height="300">
                    <h2>Ruang Kelas</h2>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/dalam_greenhouse.jpg') }}" width="300" height="300">
                    <h2>Kebun Modern</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="list">
    </div>

    <!--Data Sarpras-->
    <div style="background-color: #fff;" class="container-fluid">
        <div class="container-fluid text-center sarpras">
            <div class="row shadow">
                <h1>DATA SARANA DAN PRASARANA (SARPRAS)</h1>
                <div class="tabel">
                    {{ $fasilitas->links() }}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="background-color: #00A9FF;">No</th>
                                <th style="background-color: #00A9FF;">Jenis Sarpras</th>
                                <th style="background-color: #00A9FF;">Jumlah Satuan</th>
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

                </div>

            </div>
        </div>
    @endsection
    <!--fasilitas-->
