@extends('layouts_user.main')
@section('content')
    <div class="hero ">
        <div class="container text-center sambutan">
            <div class="row justify-content-evenly">
                <div class=" col-xs-6 col-md-6 col-xl-6 text-light">

                    <h3>Selamat Datang</h3>
                    <h4>Website SMPN 4 Balige</h4>
                    <p>Menyambut anda di halaman utama
                        sekolah kami - pintu gerbang menuju
                        pengetahuan dan pengalaman yang
                        tak terbatas</p>
                </div>
                <div class=" col-xs-6 col-md-6 col-xl-6 scroll pb-5">
                    <img src="{{ asset('img/2.jpg') }}">
                </div>
            </div>
        </div>
    </div>

    <!--kalimat pembuka-->
    <div class="list">
    </div>
    <div class="container-fluid person">
        <div class="row justify-content-md-center flex-wrap" style="background: rgba(217, 217, 217, 0.64);">
            <div class="col-md-4 col-xl-4">
                <img src="{{ asset('img/berliana.png') }}" width="100" height="100">
            </div>
            <div class="col-md-8 col-xl-8">
                <div class="hero1">
                    
                    <h2>KEPALA SEKOLAH SMPN 4 BALIGE</h2>
                    <h3>Berliana Pasaribu, S.Pd.</h3>
                    @foreach ($kata_sambutan as $kata_sambutan)
                        <p>{{$kata_sambutan->isi}}</p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="list">
    </div>
    <!-- Berita/Pengumuman -->
    <div class="latar">
        <div class="container text-center berita">
            <h1 style="text-align: left;">B E R I T A</h1>
            <div class="row justify-content-evenly">
                @foreach ($berita as $item)
                    <div class="col-10 col-lg-5 news">
                        <img src="{{ asset('storage/images/' . $item->file) }}" width="100" height="100">
                        <div>
                            <h5 style="-webkit-line-clamp: 1; display: -webkit-box; -webkit-box-orient: vertical;overflow: hidden;">{{ $item->judul }}</h5>
                            <p style="-webkit-line-clamp: 1; display: -webkit-box; -webkit-box-orient: vertical;overflow: hidden;">{{ $item->isi }}</p>
                            <u>{{ $item->created_at }}</u><br>
                            <a href="{{ route('berita.show', ['id' => $item->id]) }}">Selengkapnnya..</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
