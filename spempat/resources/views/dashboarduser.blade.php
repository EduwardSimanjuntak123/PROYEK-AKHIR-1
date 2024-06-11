@extends('layouts_user.main')
@section('content')
<div class="container">
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
                <div class=" col-xs-6 col-md-6 mb-5 scroll">
                    <img src="{{ asset('img/2.jpg') }}">
                </div>
            </div>
        </div>
    </div>

    <!--kalimat pembuka-->
    <div class="list">
    </div>
    <div class="container-fluid person">
        <div class="row justify-content-md-center flex-wrap" style="background: rgba(0, 0, 0, 0.5);">
            <div class="col-md-4 col-xl-4">
                <img src="{{ asset('img/berliana.png') }}" width="100" height="100">
            </div>
            <div class="col-md-8 col-xl-8">
                <div class="hero1">
                    <h2>KEPALA SEKOLAH SMPN 4 BALIGE</h2>
                    <h3>Berliana Pasaribu, S.Pd.</h3>
                    <p>Pembelajaran elearning merupakan bagian dari tuntutan kemajuan teknologi dan
                        komunikasi saat ini
                        Melalui pembelajaran model ini diharapkan pendidik dan peserta didik dapat lebih interaktif dan
                        menyenangkan.
                        Alhamdulillah kita patut bersyukur, SMP Negeri 4 Balige menjadi pelopor di Kota Balige yang
                        menerapkan
                        pembelajaran UKBM dalam bentuk eLearning.
                        Oleh karena itu, kami berharap melalui pembelajaran elearning ini SMP Negeri 4 Balige menjadi
                        bagian dari
                        pendidikan yang bermutu dan berkualitas.</p>
                </div>
            </div>
        </div>
    </div>
  
    <div class="list">
    </div>

    <!-- Berita/Pengumuman -->
    <div class="latar">
        <div class="container-fluid text-center berita">
            <h2>B E R I T A</h2>
            <div class="row justify-content-evenly">
                <div class="col-10 col-lg-5 news">
                    <div>
                        <img src="{{ asset('img/1.jpg') }}" width="100" height="100">
                    </div>
                    <div class="other">
                        <h3>Pengumuman 1</h3>
                        <a href="berita_terkini.html">Selengkapnnya..</a>
                    </div>
                </div>

                <div class="col-10 col-lg-5 news">
                    <div>
                        <img src="{{ asset('img/1.jpg') }}" width="100" height="100">
                    </div>
                    <div class="other">
                        <h3>Pengumuman 2</h3>
                        <a href="berita_terkini.html">Selengkapnnya..</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-10 col-lg-5 news">
                    <div>
                        <img src="{{ asset('img/berliana.png') }}" width="100" height="100">
                    </div>
                    <div class="other">
                        <h3>Pengumuman 3</h3>
                        <a href="berita_terkini.html">Selengkapnnya..</a>
                    </div>
                </div>

                <div class="col-10 col-lg-5 news">
                    <div>
                        <img src="{{ asset('img/berliana.png') }}" width="100" height="100">
                    </div>
                    <div class="other">
                        <h3>Pengumuman 4</h3>
                        <a href="berita_terkini.html">Selengkapnnya..</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-10 col-lg-5 news">
                    <div>
                        <img src="{{ asset('img/berliana.png') }}" width="100" height="100">
                    </div>
                    <div class="other">
                        <h3>Pengumuman 5</h3>
                        <a href="berita_terkini.html">Selengkapnnya..</a>
                    </div>
                </div>

                <div class="col-10 col-lg-5 news">
                    <div>
                        <img src="{{ asset('img/berliana.png') }}" width="100" height="100">
                    </div>
                    <div class="other">
                        <h3>Pengumuman 6</h3>
                        <a href="berita_terkini.html">Selengkapnnya..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
   

    {{-- @if ($kata_sambutan)
                        <p>{{ $kata_sambutan->isi }}</p>
                    @else
                        <p>Tidak ada kata sambutan yang dipilih.</p>
                    @endif --}}
@endsection
