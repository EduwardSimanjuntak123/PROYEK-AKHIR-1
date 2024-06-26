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
                <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="">
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
            <div class="col-6 left">
                <div class="three">
                    <h1 style="color:white;">MAPS</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.1418352102305!2d99.0469476716618!3d2.3261271552038028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e04f1116aadad%3A0xee0a9a7c9f1693f7!2sSMP%20Negeri%204%20BALIGE!5e0!3m2!1sid!2sid!4v1716953171828!5m2!1sid!2sid"
                        width="600" height="340" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-6 right">
                @foreach ($about_us as $item)
                    <div class="two" style="height: 380px">
                        <h1 style="color:white;">Info Kontak</h1>
                        <h4><i class="bi bi-telephone-fill"></i>Telepon : {{ $item->no_telepon }}</h4>
                        <h4><i class="bi bi-envelope-fill"></i>Email : {{ $item->email }}</h4>
                        <h4><i class="bi bi-house-door-fill"></i>Alamat : {{ $item->alamat }}</h4>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="list">
    </div>

    <div class="container mb-5">

        <div class="mt-5">
            <div class="card shadow ulasan">

                <h1 class="text-center" style="color:white ">Buat Ulasan</h1>
                
                <div class="card-body">
                    <form action="{{ route('kritik.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Nama (Optional)">
                        </div>
                        <div class="form-group mt-2">

                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email (Optional)">
                        </div>
                        <div class="form-group mt-2">
                            <textarea class="form-control" name="isi_kritik" id="isi_kritik" rows="3"
                                placeholder="masukkan ulasan anda terkait sekolah maupun website kami"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-5 ulasan">
            <h1 class="py-1 text-center" style=" color:white;">Ulasan Pengunjung kami</h1>
            <div class="mb-4 p-2 shadow" style="background-color: #f8f9fa;">
                @foreach ($kritiks as $kritik)
                    <div class="chat-bubble user shadow">
                        <h6 class="text-start text-success">{{ $kritik->nama ?? 'Anonymous' }}</h6>
                        <p class="text-start">{{ $kritik->isi_kritik }}</p>
                    </div>
                    <div>
                        @foreach ($kritik->balasan as $balas)
                            <div class="d-flex justify-content-end">
                                <div class="chat-bubble admin shadow">
                                    <h6 class="text-end text-primary">Admin</h6>
                                    <p class="text-end">{{ $balas->isi_balasan }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>


    </div>




    </div>
    </div>
    </div>
@endsection
