@extends('layouts_user.main')
@section('content')
    <!--tampilan isi-->
    <div class="isi">
        <div style="background: rgba(5, 5, 5, 0.348); height:max-content">
            <h1>Guru dan Staff</h1>
            <div class="container ">
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
    <div class="list">

    </div>

    <div class="container guru ">

        <div class="tabel">
            <div style="display: flex;justify-content:end">{{ $gurustaff->links() }}</div>

            <table class="table table-bordered shadow">
                <thead>
                    <tr>
                        <th style="background-color:rgb(8, 153, 201)" colspan="3">DAFTAR GURU DAN STAF</th>
                    </tr>
                    <tr>
                        <th style="background-color:  rgb(8, 153, 201)">No</th>
                        <th style="background-color: rgb(8, 153, 201)">Nama Guru/Staff</th>
                        <th style="background-color:  rgb(8, 153, 201)">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gurustaff as $item)
                        <tr>
                            <td>{{ ($gurustaff->currentPage() - 1) * $gurustaff->perPage() + $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
