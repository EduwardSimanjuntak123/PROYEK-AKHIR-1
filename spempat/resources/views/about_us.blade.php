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
                    @foreach ($berita as $berita)
                        <hr>
                        <p>{{ $berita->judul }}</p>
                    @endforeach


                </div>
            </div>
            <div class="col-8 right">
                @foreach ($about_us as $item)
                    <div class="two">
                        <h1>Info Kontak</h1>
                        <h4><i class="bi bi-telephone-fill"></i>Telepon : {{ $item->no_telepon }}</h4>
                        <h4><i class="bi bi-envelope-fill"></i>Email : {{ $item->email }}</h4>
                        <h4><i class="bi bi-house-door-fill"></i>Alamat : {{ $item->alamat }}</h4>
                    </div>
                @endforeach
                <div class="three">
                    <h1>MAPS</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.1418352102305!2d99.0469476716618!3d2.3261271552038028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e04f1116aadad%3A0xee0a9a7c9f1693f7!2sSMP%20Negeri%204%20BALIGE!5e0!3m2!1sid!2sid!4v1716953171828!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    
                    <h1 class="mb-4 ">Ulasan Pengunjung kami</h1>
                    <hr>
                    <div class="mb-4">
                        @foreach ($kritiks as $kritik)
                            <div class="chat-bubble user">
                                <h6 class="text-start text-success">{{ $kritik->nama ?? 'Anonymous' }}</h6>
                                <p class="text-start">{{ $kritik->isi_kritik }}</p>
                            </div>
                            <div>
                                @foreach ($kritik->balasan as $balas)
                                    <div class="d-flex justify-content-end">
                                        <div class="chat-bubble admin">
                                            <h6 class="text-end text-primary">Admin</h6>
                                            <p class="text-end">{{ $balas->isi_balasan }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                    </div>
                    <div class="four text-center">
                        <form action="{{ route('kritik.store') }}" method="POST" class="mt-4">
                            @csrf
                            <h1>Buat Ulasan </h1>
                            <div class="form-group">
                                <label for="nama">Nama (Optional)</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Nama (Optional)">
                            </div>
                            <div class="form-group">
                                <label for="email">Email (Optional)</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email (Optional)">
                            </div>
                            <div class="form-group">
                                <label for="isi_kritik">Kritik</label>
                                <textarea class="form-control" name="isi_kritik" id="isi_kritik" rows="3" placeholder="Kritik"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endsection
