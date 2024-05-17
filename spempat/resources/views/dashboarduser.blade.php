@extends('layouts_user.main')
@section('content')
    <div class="hero ">
        <div class="container text-center sambutan">
            <div class="row justify-content-evenly">
                <div class="col-sm-2 col-lg-6 col-md-12 text-light">
                    <h3>Selamat Datang</h3>
                    <h4>Website SMPN 4 Balige</h4>
                    <p>Menyambut anda di halaman utama
                        sekolah kami - pintu gerbang menuju
                        pengetahuan dan pengalaman yang
                        tak terbatas</p>
                    <br>
                </div>
                <div class="col-sm-2 col-lg-6 col-md-12 p-5 scroll">
                    <div class="shape">
                        <img class="shadow" src="{{ asset('img/2.jpg') }}" width="500" height="400">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--kalimat pembuka-->
    <div class="list">
    </div>
    <div class="container-fluid person">
        <div class="row justify-content-md-center flex-wrap" style="background: rgba(217, 217, 217, 0.64);">
            <div class="col-sm-2 col-lg-4">
                <img src="{{ asset('img/berliana.png') }}">
            </div>
            <div class="col-sm-4 col-lg-8">
                <div class="hero1">
                    <h2>KEPALA SEKOLAH SMPN 4 BALIGE</h2>
                    <h3>Berliana Pasaribu, S.Pd.</h3>
                    <p>Pembelajaran elearning merupakan bagian dari tuntutan kemajuan teknologi dan
                        komunikasi saat ini.
                        Melalui pembelajaran model ini diharapkan pendidik dan peserta didik dapat lebih interaktif dan
                        menyenangkan.
                        Alhamdulillah kita patut bersyukur, SMP Negeri 4 Balige menjadi pelopor di Kota Balige yang
                        menerapkan
                        pembelajaran UKBM dalam bentuk eLearning.
                        Oleh karena itu, kami berharap melalui pembelajaran elearning ini SMP Negeri 4 Balige menjadi bagian
                        dari
                        pendidikan yang bermutu dan berkualitas.</p>
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

                        <img src="{{ asset('storage/img/' . $item->file) }}">
                        <div class="deskripsi">
                            <a href="{{ route('berita.show', ['id' => $item->id]) }}">
                                <p>{{ $item->judul }}</p>
                            </a>
                            <em style="text-align: start;font-size:13px; color:rgb(252, 0, 0)">{{ $item->created_at }}</em>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
