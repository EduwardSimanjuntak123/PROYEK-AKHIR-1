@extends('layouts_user.main')
@section('content')
    <div class="hero">
        <div class="container text-center sambutan">
            <div class="row justify-content-evenly">
                <div class=" col-xs-6 col-md-6 text-light">
                    <h3>Selamat Datang</h3>
                    <h4>Website SMPN 4 Balige</h4>
                    <p>Menyambut anda di halaman utama
                        sekolah kami - pintu gerbang menuju
                        pengetahuan dan pengalaman yang
                        tak terbatas</p>
                </div>
                <div class=" col-xs-6 col-md-6 mb-5 scroll1">
                    <img src={{ asset('img/2.jpg') }}>
                </div>
            </div>
        </div>
    </div>

    <!--kalimat pembuka-->
    <div class="list">
    </div>
    <div class="container-fluid person">
        <div class="row justify-content-md-center flex-wrap"
            style="background: rgba(217, 217, 217, 0.64); position: relative;">
            <div class="col-md-4 col-xl-4" style="position: relative;">
                <img src="{{ asset('img/berliana.png') }}" class="img-fluid"
                    style="position: absolute; bottom: 0; width: 100%;">
            </div>
            <div class="col-md-8 col-xl-8">
                <div class="hero1">
                    <h2>KEPALA SEKOLAH SMPN 4 BALIGE</h2>
                    <h3>Berliana Pasaribu, S.Pd.</h3>
                    @foreach ($kata_sambutan as $kata_sambutan)
                        <p>{{ $kata_sambutan->isi }}</p>
                    @endforeach
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
                    <div class="col-10 col-lg-5 news shadow">
                        <div>
                            <img src="{{ asset('storage/img/' . $item->file) }}" width="100" height="100">

                        </div>
                        <div class="text-start">
                            <a class="link" href="{{ route('berita.show', ['id' => $item->id]) }}">
                                <h5 class="text-start"
                                    style="-webkit-line-clamp:2; display:-webkit-box; -webkit-box-orient:vertical; overflow:hidden;">
                                    {{ $item->judul }}</h5>
                            </a>
                            <a class="text-start link" href="{{ route('berita.show', ['id' => $item->id]) }}">
                                <p>Selengkapnnya..</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>




        </div>
    </div>
@endsection
