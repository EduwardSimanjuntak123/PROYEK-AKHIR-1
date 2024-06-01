@extends('layouts_user.main')
@section('content')
<div class="container-fluid text-center word">
    <div class="row">
      <div class="col">
        <img src="gambar/ruang_lab.jpg" alt="foto_1" width="285" height="285">
        <img src="gambar/sekolah3.jpg" alt="foto_2" width="285" height="285">
        <img src="gambar/ruangkelas.jpg" alt="foto_3" width="285" height="285">
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
          <img src="gambar/tanaman.jpg" width="300" height="300">
          <h2>Tata Usaha</h2>
        </div>
        <div class="col-6">
          <img src="" width="300" height="300">
          <h2>Ruang Lab</h2>
        </div>
        <div class="col-6">
          <img src="" width="300" height="300">
          <h2>Ruang Kelas</h2>
        </div>
        <div class="col-6">
          <img src="" width="300" height="300">
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
        <div class="tabel">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="background-color: #00A9FF;">No</th>
                <th style="background-color: #00A9FF;">Jenis Sarpras</th>
                <th style="background-color: #00A9FF;">Jumlah Satuan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Ruang Kelas</td>
                <td>22</td>
              </tr>
              <tr class="genap">
                <td>2</td>
                <td>Ruang Perpustakaan</td>
                <td>1</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ruang Laboratorium</td>
                <td>3</td>
              </tr>
              <tr class="genap">
                <td>4</td>
                <td>Ruang Praktik</td>
                <td>0</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Ruang Pimpinan</td>
                <td>1</td>
              </tr>
              <tr class="genap">
                <td>6</td>
                <td>Ruang Guru</td>
                <td>0</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Ruang Ibadah</td>
                <td>0</td>
              </tr>
              <tr class="genap">
                <td>8</td>
                <td>Ruang UKS</td>
                <td>0</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Ruang Toilet</td>
                <td>14</td>
              </tr>
              <tr class="genap">
                <td>10</td>
                <td>Ruang Gudang</td>
                <td>0</td>
              </tr>
              <tr>
                <td>11</td>
                <td>Ruang Sirkulasi</td>
                <td>0</td>
              </tr>
              <tr class="genap">
                <td>12</td>
                <td>Tempat Bermain/Olahraga</td>
                <td>0</td>
              </tr>
              <tr>
                <td>13</td>
                <td>Ruang Tata Usaha</td>
                <td>0</td>
              </tr>
              <tr class="genap">
                <td>14</td>
                <td>Ruang Konseling</td>
                <td>0</td>
              </tr>
              <tr>
                <td>15</td>
                <td>Ruang OSIS</td>
                <td>0</td>
              </tr>
              <tr class="genap">
                <td>16</td>
                <td>Ruang Bangunan</td>
                <td>11</td>
              </tr>
              <tr>
                <th colspan="2">Total</th>
                <th>52</th>
              </tr>
            </tbody>
          </table>
        </div>

    </div>
  </div>



@endsection
<!--fasilitas-->
