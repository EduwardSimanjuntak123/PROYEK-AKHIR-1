@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="row mb-3 ">
            <div class="col-md-6 mt-5">
                <div class="card   border-left-success shadow h-100 py-2" style="background: #d9d9d9">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs text-success fw-bold mb-1">
                                    Jumlah Data Guru</div>
                                <div class="h5 mb-0 text-gray-800">{{ $totalDataGuru }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card   shadow h-100 py-2" style="background: #d9d9d9">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs text-primary fw-bold mb-1">
                                    Jumlah Data Sarpras</div>
                                <div class="h5 mb-0 text-gray-800">{{ $totalDataSarpras }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card  border-left-success shadow h-100 py-2" style="background: #d9d9d9">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-warning mb-1">
                                    Jumlah Foto Galeri</div>
                                <div class="h5 mb-0 text-gray-800">{{ $totalDataGaleri }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card  border-left-success shadow h-100 py-2" style="background: #d9d9d9">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs text-danger fw-bold mb-1">
                                    Jumlah Berita</div>
                                <div class="h5 mb-0 text-gray-800">{{ $totalDataberita }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
