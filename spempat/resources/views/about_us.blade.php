@extends('layouts_user.main')
@section('content')
    <!--carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="list">
    </div>

    <!--about us-->
    <div class="container-fluid text-center data">
        <div class="row row-cols-2">
            <div class="col-md-3 kiri">
            
                <div class="col-12 dua shadow">
                    <h1>Berita Terkini</h1>
                    @foreach ($berita as $berita)
                    <p><i><a href="#">{{ $berita->judul }}</a></i></p>
                    @endforeach
                    
                   
                </div>
            </div>
            <div class="col-md-9 kanan">
                @foreach ($about_us as $item)
                    <div class="col-12 one shadow">
                        <h1 class="bg-primary text-white">Info Kontak</h1>
                        <h3><i class="bi bi-telephone-fill"></i>Telepon : {{ $item->no_telepon }}</h3>
                        <h3><i class="bi bi-envelope"></i>Email :  {{ $item->email}}</h3>
                        <h3><i class="bi bi-house-door-fill"></i>Alamat :  {{ $item->alamat}}</h3>
                    </div>
                @endforeach

                <div class="col-12 two shadow">
                    <h1>MAPS</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.5309524302907!2d99.04738347592607!3d2.3260285976536585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e04f1116aadad%3A0xee0a9a7c9f1693f7!2sSMP%20Negeri%204%20BALIGE!5e0!3m2!1sid!2sid!4v1714019721349!5m2!1sid!2sid"
                        width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
