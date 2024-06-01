@extends('layouts_user.main')
@section('content')
 <!--tampilan awal-->

  <!--tampilan awal-->
  <div class="container-fluid hero">
    <h1>DATA SEKOLAH</h1>
    <div class="row gambar">
      <div class="col-4 col-md-4">
        <img src="{{asset('img/Tutwuri.png')}}" width="500" height="500">
      </div>
      <div class="col-4 col-md-4">
        <img src="{{asset('img/Tutwuri.png')}}" width="500" height="500">
      </div>
      <div class="col-4 col-md-4">
        <img src="{{asset('img/Tutwuri.png')}}" width="500" height="500">
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
        <div class="satu">
          <h2><i class="bi bi-info-circle"></i>Detail Sekolah</h2>
          <img src="{{asset('img/Tutwuri.png')}}" width="300" height="300">
          <h4><i class="bi bi-person-fill"></i>Kepala Sekolah : Berliana Pasaribu.</h4>
          <h4>Operator : Deslima Siahaan</h4>
          <h4>Akreditas : A</h4>
        </div>
        <div class="dua">
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

      <div class="col-lg-8 col-7 kanan">
        <div class="one">
          <h1>IDENTITAS SEKOLAH</h1>
          <h3>NPSN :</h3>
          <h3>Status :</h3>
          <h3>Bentuk Pendidikan :</h3>
          <h3>Status Kepemilikan :</h3>
          <h3>SK Pendirian Sekolah :</h3>
          <h3>Tanggal SK Pendirian :</h3>
          <h3>SK Izin Operasional :</h3>
          <h3>Tanggal SK Izin Operasional :</h3>
        </div>
        <div class="two">
          <h1>DATA PELENGKAP</h1>
          <h3>Status BOS :</h3>
          <h3>Sumber listrik :</h3>
          <h3>Daya listrik :</h3>
          <h3>Kecepatan Internet :</h3>
          <h3>Luas Tanah :</h3>
        </div>
        <div class="three">
          <h1>DATA ROMBONGAN BELAJAR</h1>
          <h3>SMP NEGERI 4 BALIGE memiliki jumlah rombel sebanyak 21, dengan uraian sebagai berikut :</h3>
          <div class="tabel">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="background-color: #00A9FF;">Tingkat</th>
                <th style="background-color: #00A9FF;">Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>7</td>
                <td>7</td>
              </tr>
              <tr>
                <td>8</td>
                <td>7</td>
              </tr>
              <tr>
                <td>9</td>
                <td>7</td>
              </tr>
              <tr>
                <td >Total</td>
                <td>21</td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        <div class="four">
          <h1>DATA SISWA</h1>
          <div class="container tabel">
            <table class="table table-bordered">
                <tr>
                  <th style="background-color: #00A9FF; width: 50%;">Jenis Kelamin</th>
                  <th style="background-color: #00A9FF;">Jumlah</th>
                </tr>
                <tr>
                  <td>Laki-Laki</td>
                  <td>286</td>
                </tr>
                <tr>
                  <td>Perempuan</td>
                  <td>283</td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td>569</td>
                </tr>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>

@endsection
<!--tampilan awal-->
