@extends('layouts_user.main')
@section('content')
    <div class="container shadow" >
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

        <!-- HTML -->
        
            <div class="row">
                <div class="col-md-12 title1">
                    <h2 class="mb-4">Berita Sekolah</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($berita as $item)
                  <div class="col-md-4 news">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/img/' . $item->file) }}" class="card-img-top" alt="Foto Kegiatan Sekolah">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <div class="card-text">
                                <p class="clamp-2-lines">{{ $item->isi }}</p>
                              </div>
                            <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="btn" style="background: #023768;color:white;">Baca
                                Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $item->created_at }}</small>
                        </div>
                    </div>
                </div>  
                @endforeach
            </div>
        </div>

      

    </div>
@endsection
