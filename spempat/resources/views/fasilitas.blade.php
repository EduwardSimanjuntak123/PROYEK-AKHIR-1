@extends('layouts_user.main')
@section('content')
<div class="container-fluid text-center word">
    <div class="row">
      <div class="col">
        <img src="{{ asset('img/1.jpg') }}" alt="foto_1" width="285" height="285">
        <img src="{{ asset('img/1.jpg') }}" alt="foto_2" width="285" height="285">
        <img src="{{ asset('img/1.jpg') }}" alt="foto_3" width="285" height="285">
      </div>
      <div class="col">
        <h1>FASILITAS</h1>
        <h1>SMPN 4 BALIGE</h1>
        <p>Fasilitas yang nyaman membentuk suasana pembelajaran yang damai dan mendukung</p>
      </div>
    </div>
  </div>

  <div class="list1">
  </div>

  <div class="list">
  </div>

<!--overflow-->
  <div class="container-fluid scrolldown">
    <h1>Fasilitas-fasilitas yang ada di SMPN 4 BALIGE</h1>
    <div class="container-fluid text-center">
      <div class="row row-cols-2 justify-content-evenly">
        <div class="col-6">
          <img src="{{ asset('img/1.jpg') }}" width="300" height="300">
          <h2>Tata Usaha</h2>
        </div>
        <div class="col-6">
          <img src="{{ asset('img/1.jpg') }}" width="300" height="300">
          <h2>Ruang Lab</h2>
        </div>
        <div class="col-6">
          <img src="{{ asset('img/1.jpg') }}" width="300" height="300">
          <h2>Ruang Kelas</h2>
        </div>
        <div class="col-6">
          <img src="{{ asset('img/1.jpg') }}" width="300" height="300">
          <h2>Kebun Modern</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="list">
  </div>

  <!--Data Sarpras-->
  <div style="background-color: #fff;" class="container-fluid">
    <div class="container-fluid text-center sarpras">
      <div class="row">
        <h1>DATA SARANA DAN PRASARANA (SARPRAS)</h1>
        <div class="col-2 col-md-2 col-lg-2">
          <h2>NO</h2>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h2>Jenis Sarpras</h2>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h2>JUMLAH SATUAN</h2>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>1</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Kelas</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>22</h3>
        </div>
      </div>

      <div class="row genap">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>2</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Perpustakaan</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>1</h3>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>3</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Laboratorium</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>3</h3>
        </div>
      </div>

      <div class="row genap">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>4</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Praktik</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>5</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Pimpinan</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>1</h3>
        </div>
      </div>

      <div class="row genap">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>6</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Guru</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>7</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Ibadah</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row genap">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>8</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang UKS</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>9</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Toilet</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>14</h3>
        </div>
      </div>

      <div class="row genap">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>10</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Gudang</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>11</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Sirkulasi</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row genap">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>12</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Tempat Bermain/Olahraga</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>13</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang TU</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row genap">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>14</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Konseling</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>15</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang OSIS</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>0</h3>
        </div>
      </div>

      <div class="row genap">
        <div class="col-2 col-md-2 col-lg-2">
          <h3>16</h3>
        </div>
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Ruang Bangunan</h3>
        </div>
        <div class="col-2 col-md-2 col-lg-2">
          <h3>11</h3>
        </div>
      </div>

      <div class="row ganjil">
        <div class="col-8 col-md-8 col-lg-8">
          <h3>Total</h3>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
          <h3>52</h3>
        </div>
      </div>

    </div>
  </div>


@endsection
<!--fasilitas-->
