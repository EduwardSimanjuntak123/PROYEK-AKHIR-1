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
                  @if ($kata_sambutan)
                        <p>{{ $kata_sambutan->isi }}</p>
                    @else
                        <p>Tidak ada kata sambutan yang dipilih.</p>
                    @endif
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
                @foreach ($berita as $item)
                    <div class="col-10 col-lg-5 news" style="display: flex;justify-content:space-around">
                    <div>
                        <img src="{{ asset('storage/img/' . $item->file) }}" width="100" height="100">
                    </div>
                    <div class="other">
                        <h3>{{ $item->judul }}</h3>
                        <a href="{{ route('berita.show', ['id' => $item->id]) }}">Selengkapnnya..</a>
                    </div>
                </div>
                @endforeach
                

               
                
            </div>
        </div>
    </div>
</div>
    
   

    
@endsection
