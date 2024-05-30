@extends('layouts_user.main')
@section('content')
 <!--tampilan awal-->
 <div class="container-fluid hero">
    <h1>DATA SEKOLAH</h1>
    <div class="row gambar">
      <div class="col-4 col-md-4">
        <img src="{{ asset('img/1.jpg') }}" width="500" height="500">
      </div>
      <div class="col-4 col-md-4">
        <img src="{{ asset('img/1.jpg') }}" width="500" height="500">
      </div>
      <div class="col-4 col-md-4">
        <img src="{{ asset('img/1.jpg') }}" width="500" height="500">
      </div>
    </div>
    <h1>SMPN 4 BALIGE</h1>
  </div>

  <div class="list">
  </div>

  <!--data sekolah-->
  <div class="container-fluid text-center data">
    <div class="row row-cols-2">

      <div class="col-lg-4 col-5 kiri">
        <div class="col-lg-12 satu">
          <h2><i class="bi bi-info-circle"></i>Detail Sekolah</h2>
          <img src="{{ asset('img/Tutwuri.png') }}" width="300" height="300">
          <h4><i class="bi bi-person-fill"></i>Kepala Sekolah : Berliana Pasaribu.</h4>
          <h4>Operator : Deslima Siahaan</h4>
          <h4>Akreditas : A</h4>
        </div>
        <div class="col-lg-12 dua">
          <h1>Berita Terkini</h1>
          @foreach ($berita as $berita)
          <hr>{{$berita->judul}} <br>
          {{-- {{$berita->isi}}     --}}
          @endforeach
        </div>
      </div>

      <div class="col-lg-8 col-7 kanan">
        <div class="col-lg-12 one">
          @foreach ($data_sekolah as $data_sekolah)
              
          
          <h1>IDENTITAS SEKOLAH</h1>
          <h3>NPSN : {{$data_sekolah->NPSN}}</h3>
          <h3>Status : {{$data_sekolah->status}}</h3>
          <h3>Bentuk Pendidikan : {{$data_sekolah->Bentuk_kepemilikan}}</h3>
          <h3>Tanggal SK Pendirian: {{$data_sekolah->Tanggal_SK_pendirian_sekolah}}</h3>
          <h3>SK Pendirian Sekolah : {{$data_sekolah->SK_pendirian_sekolah}}</h3>
          <h3>Status Kepemilikan : {{$data_sekolah->status_kepemilikan}}</h3>
          <h3>SK Izin Operasional : {{$data_sekolah->SK_ijin_operasional}} </h3>
          <h3>Tanggal SK Izin Operasional : {{$data_sekolah->tanggak_SK_ijin_operasional}} </h3>
        </div>
        <div class="col-lg-12 two">
          <h1>DATA PELENGKAP</h1>
          <h3>Status BOS : {{$data_sekolah->status_BOS}} </h3>
          <h3>Sumber listrik : {{$data_sekolah->Sumber_Listrik}} </h3>
          <h3>Daya listrik : {{$data_sekolah->Daya_Listrik}} </h3>
          <h3>Kecepatan Internet : {{$data_sekolah->Kecepatan_Internet}} </h3>
        </div>
        <div class="col-lg-12 three">
          <h1>DATA ROMBONGAN BELAJAR</h1>
          <h3>SMP NEGERI 4 BALIGE memiliki jumlah rombel sebanyak 21, dengan uraian sebagai berikut :</h3>
          <div class="row row-cols-2 total">
            <div class="col">
              <h6 style="background: #00A9FF;">Tingkat</h6>
            </div>
            <div class="col">
              <h6 style="background: #00A9FF;">Jumlah</h6>
            </div>
            <div class="col">
              <h6>7</h6>
            </div>
            <div class="col">
              <h6>7</h6>
            </div>
            <div class="col">
              <h6>8</h6>
            </div>
            <div class="col">
              <h6>7</h6>
            </div>
            <div class="col">
              <h6>9</h6>
            </div>
            <div class="col">
              <h6>7</h6>
            </div>
            <div class="col">
              <h6>Total</h6>
            </div>
            <div class="col">
              <h6>21</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-12 four">
          <h1>DATA SISWA</h1>
          <div class="row row-cols-2 total">
            <div class="col">
              <h6 style="background: #00A9FF;">Jenis Kelamin</h6>
            </div>
            <div class="col">
              <h6 style="background: #00A9FF;">Jumlah</h6>
            </div>
            <div class="col">
              <h6>Laki-laki</h6>
            </div>
            <div class="col">
              <h6>286</h6>
            </div>
            <div class="col">
              <h6>Perempuan</h6>
            </div>
            <div class="col">
              <h6>283</h6>
            </div>
            <div class="col">
              <h6>Total</h6>
            </div>
            <div class="col">
              <h6>569</h6>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  @endforeach
@endsection
<!--tampilan awal-->
