@extends('layouts_user.main')
@section('content')
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
                <img src="gambar/sekolah1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="gambar/sekolah2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="gambar/sekolah3.jpg" class="d-block w-100" alt="">
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
    <div class="container text-center about">
        <div class="row">
            <div class="col-4 left">
                <div class="one">
                    <h1>Berita Terkini</h1>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                </div>
            </div>
            <div class="col-8 right">
                <div class="two">
                    <h1>Info Kontak</h1>
                    <h4><i class="bi bi-telephone-fill"></i>Telepon : 063221612</h4>
                    <h4><i class="bi bi-envelope-fill"></i>Email : smpn4balige@yahoo.com</h4>
                    <h4><i class="bi bi-house-door-fill"></i>Alamat : Toba Samosir, Kecamatan Balige, Kabupaten Toba, Sumatera Utara</h4>
                </div>
                <div class="three">
                    <h1>MAPS</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.1418352102305!2d99.0469476716618!3d2.3261271552038028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e04f1116aadad%3A0xee0a9a7c9f1693f7!2sSMP%20Negeri%204%20BALIGE!5e0!3m2!1sid!2sid!4v1716953171828!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
