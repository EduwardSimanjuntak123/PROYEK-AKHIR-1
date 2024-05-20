@extends('layouts.main')

@section('content')
<div class="container">
  <div style="">
      <div id="carouselExampleDark" class="carousel carousel-dark" data-bs-ride="carousel">
          <div class="carousel-indicators" style="margin-top: 100px">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                  <img src="{{ asset('img/2.jpg') }}" class="d-block w-100" alt="carousell2019logo_colour.png"
                      style="height: 520px; filter: brightness(60%);" />
                  <div class="carousel-caption d-none d-md-block" style="padding-bottom: 200px">
                      <h1 class="text-white"
                          style="
              
              font-family: 'Poppins', sans-serif;
            ">
                          SELAMAT DATANG DI DASHBOARD ADMIN <br />
                          SMP N 4 BALIGE
                      </h1>
                  </div>
              </div>
              <div class="carousel-item" data-bs-interval="1000">
                  <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="carousell2019logo_colour.png"
                      style="height: 520px ; filter: brightness(60%);" />
                  <div class="carousel-caption d-none d-md-block" style="padding-bottom: 200px">
                      <h1 class="text-white"
                          style="
          
          font-family: 'Poppins', sans-serif;
        ">
                          SELAMAT DATANG DI DASHBOARD ADMIN <br />
                          SMP N 4 BALIGE
                      </h1>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="carousell2019logo_colour.png"
                      style="height: 520px; filter: brightness(60%);" />
                  <div class="carousel-caption d-none d-md-block fixed" style="padding-bottom: 200px;">
                      <h1 class="text-white"
                          style="
          
          font-family: 'Poppins', sans-serif;
        ">
                          SELAMAT DATANG DI DASHBOARD ADMIN <br />
                          SMP N 4 BALIGE
                      </h1>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev next" type="button" data-bs-target="#carouselExampleDark"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon " aria-hidden="true"></span>
              <span class="visually-hidden ">Previous</span>
          </button>
          <button class="carousel-control-next next" type="button" data-bs-target="#carouselExampleDark"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </div>
  
</div>

@endsection
