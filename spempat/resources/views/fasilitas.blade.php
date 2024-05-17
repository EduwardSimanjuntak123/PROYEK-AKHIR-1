@extends('layouts_user.main')
@section('content')
    <div class="container-fluid text-center word">
        <div class="row">
            <div class="col">
                <img src="gambar/ruang_lab.jpg" alt="foto_1">
                <img src="gambar/sekolah3.jpg" alt="foto_2">
                <img src="gambar/ruangkelas.jpg" alt="foto_3">
            </div>
            <div class="col">
                <h1>FASILITAS</h1>
                <h1>SMPN 4 BALIGE</h1>
                <p>Fasilitas yang nyaman membentuk suasana pembelajaran yang damai dan mendukung</p>
            </div>
        </div>
    </div>

   

    <div class="list mt-3">
    </div>

    <div class="container-fluid scrolldown">
        <h1>Fasilitas Yang Ada Di SMPN 4 BALIGE</h1>
        <div class="container text-center shadow">
            <div class="row row-cols-2 justify-content-evenly">
                <div class="col-6">
                    <img src="" alt="">
                    <h2>Tata Usaha</h2>
                </div>
                <div class="col-6">
                    <img src="" alt="">
                    <h2>Ruang Lab</h2>
                </div>
                <div class="col-6">
                    <img src="" alt="">
                    <h2>Ruang Kelas</h2>
                </div>
                <div class="col-6">
                    <img src="" alt="">
                    <h2>Kebun Modern</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="list">
    </div>

    <!--Data Sarpras-->
    <div style="background-color: #fff;" class="container-fluid">
        <div class="container text-center sarpras shadow ">

            <div class="row">
                <h1>DATA SARANA DAN PRASARANA (SARPRAS)</h1>
                <div class="col-2">
                    <h2>NO</h2>
                </div>
                <div class="col-8">
                    <h2>Jenis Sarpras</h2>
                </div>
                <div class="col-2">
                    <h2>JUMLAH SATUAN</h2>
                </div>
            </div>
            @foreach ($fasilitas as $item)
            <div class="row ganjil">
              <div class="col-2">
                  <h3>{{ $loop->iteration }}</h3>
              </div>
              <div class="col-8">
                  <h3>{{ $item->nama_sarpras }}</h3>
              </div>
              <div class="col-2">
                  <h3>{{ $item->jumlah_sarpras }}</h3>
              </div>
          </div>
            @endforeach
            

        </div>
    </div>
@endsection
<!--fasilitas-->
