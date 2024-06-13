@extends('layouts_user.main')
@section('content')
   
  <!--tampilan awal-->
  <div class="text">
    <div style="background: rgba(0, 0, 0, 0.7);">
    <p style="text-align: justify;">Kami bangga memiliki tim guru dan staf yang luar biasa di SMP Negeri 4 Balige. Mereka bukan hanya pendidik yang
      berkualitas, tetapi juga individu yang peduli, berdedikasi, dan penuh semangat dalam membimbing dan mendukung
      setiap siswa kami. Dengan pengalaman yang luas dan komitmen untuk memberikan yang terbaik, guru dan staf kami
      tidak hanya menjadi mentor, tetapi juga menjadi teman dan teladan bagi para siswa. Mereka selalu siap untuk
      mendengarkan, memberikan dukungan, dan menginspirasi setiap langkah dalam perjalanan pendidikan siswa kami.
      Bersama-sama, kami membentuk sebuah komunitas belajar yang inklusif, bersemangat, dan menginspirasi di SMP Negeri
      4 Balige. Terima kasih kepada semua guru dan staf kami yang luar biasa atas dedikasi dan kontribusi mereka dalam
      menciptakan lingkungan belajar yang memotivasi dan membanggakan.</p>
  </div>
</div>

  <div class="list">
  </div>

<!--tampilan isi-->
  <div class="container guru">
    <div class="tabel">
      <table class="table table-bordered">
        <thead>
          <h2>DAFTAR GURU DAN STAF</h2>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Guru/Staff</th>
            <th>Jumlah Kelamin</th>
            <th>Jabatan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                
            
          <tr>
            <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
            <td>{{ $item->NIP }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->jabatan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
     
    </div>
  </div>
@endsection
