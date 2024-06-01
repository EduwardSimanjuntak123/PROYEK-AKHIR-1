@extends('layouts_user.main')
@section('content')
<div class="container-fluid tampilan">
        <h1>DATA GURU DAN STAFF</h1>
    </div>

    <!--tampilan isi-->
    <div class="isi">
        <div style="background: rgba(255, 255, 255, 0.34);">
            <h1>Guru dan Staff</h1>
        <div class="container-fluid">
            <p>Kami bangga memiliki tim guru dan staf yang luar biasa di SMP Negeri 4 Balige. Mereka bukan hanya
                pendidik
                yang berkualitas, tetapi juga individu yang peduli, berdedikasi, dan penuh semangat dalam membimbing dan
                mendukung setiap siswa kami. Dengan pengalaman yang luas dan komitmen untuk memberikan yang terbaik,
                guru
                dan staf kami tidak hanya menjadi mentor, tetapi juga menjadi teman dan teladan bagi para siswa. Mereka
                selalu siap untuk mendengarkan, memberikan dukungan, dan menginspirasi setiap langkah dalam perjalanan
                pendidikan siswa kami. Bersama-sama, kami membentuk sebuah komunitas belajar yang inklusif, bersemangat,
                dan
                menginspirasi di SMP Negeri 4 Balige. Terima kasih kepada semua guru dan staf kami yang luar biasa atas
                dedikasi dan kontribusi mereka dalam menciptakan lingkungan belajar yang memotivasi dan membanggakan.
            </p>
        </div>
        </div>
    </div>

<div class="container guru">
    <div class="tabel">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="background-color: #00A9FF;">No</th>
            <th style="background-color: #00A9FF;">Nama Guru/Staff</th>
            <th style="background-color: #00A9FF;">Jumlah Kelamin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Ruang Kelas</td>
            <td>22</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Ruang Perpustakaan</td>
            <td>1</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Ruang Laboratorium</td>
            <td>3</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
