@extends('layouts_user.main')
@section('content')
<div class="container-fluid tampilan">
    <h1>DATA GURU DAN STAFF</h1>
</div>

<div class="list1 mt-4">
</div>
<!--tampilan isi-->
<div class="isi">
    <div style="background: rgba(0, 0, 0, 0.658);">
    <h1>Guru dan Staff</h1>
    <div class="container">
       
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

<div class="list1 ">
</div>

<div class="container text-center data">
    <div class="row row-cols-2 total">
        <div class="col">
            <h6 style="background: #00A9FF;">Nama Guru/Staff</h6>
        </div>
        <div class="col">
            <h6 style="background: #00A9FF;">Jenis Kelamin</h6>
        </div>
        @foreach ($gurustaff as $item)
        <div class="col">
            <h6>{{ $item->nama}}</h6>
        </div>
        <div class="col">
            <h6>{{ $item->jenis_kelamin }}</h6>
        </div>
        @endforeach
    </div>
</div>


@endsection
  