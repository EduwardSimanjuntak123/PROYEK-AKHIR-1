@extends('layouts_user.main')
@section('content')
    @foreach ($data_sekolah as $data_sekolah)
        <div class="container-fluid text-center data">
            <div class="row row-cols-2">

                <div class="col-lg-5 col-6 left">
                    <div class="satu">
                     
                        <h3><i class="bi bi-info-circle"></i>Detail Sekolah</h3>
                        <img src="{{ asset('img/Tutwuri.png') }}" width="300" height="300">
                        <h5><i class="bi bi-person-fill"></i>Kepala Sekolah : {{ $data_sekolah->nama_kepala_sekolah}}</h5>
                        <h5>Operator : {{ $data_sekolah->operator}}</h5>
                        <h5>Akreditas :  {{ $data_sekolah->akreditas}} </h5>'
                        
                    </div>
                    <div class="dua">
                        <h3>DATA ROMBONGAN BELAJAR</h3>
                        <h5>SMP NEGERI 4 BALIGE memiliki jumlah rombel sebanyak 21, dengan uraian sebagai berikut :</h5>
                        <div class="tabel">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="background: #0F5B77;">Tingkat</th>
                                        <th style="background: #0F5B77;">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data_siswa as $data_siswa)
                                      
                                 
                                    <tr>
                                        <td>7</td>
                                        <td>{{ $data_siswa->jumlah_tingkat_7}}</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>{{ $data_siswa->jumlah_tingkat_8}}</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>{{ $data_siswa->jumlah_tingkat_9}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="col-lg-7 col-6 right">
                    <div class="one">
                        <h3>IDENTITAS SEKOLAH</h3>
                        <h5>NPSN : 10208505</h5>
                        <h5>Status : Negeri</h5>
                        <h5>Bentuk Pendidikan : SMP</h5>
                        <h5>Status Kepemilikan : Pemerintah Pusat</h5>
                        <h5>SK Pendirian Sekolah : 030/AU/1979</h5>
                        <h5>Tanggal SK Pendirian : 1952-01-01</h5>
                        <h5>SK Izin Operasional : -</h5>
                        <h5>Tanggal SK Izin Operasional : 1910-01-01</h5>
                    </div>
                    <div class="two">
                        <h3>DATA PELENGKAP</h3>
                        <h5>Status BOS : Bersedia Menerima</h5>
                        <h5>Sumber listrik : PLN</h5>
                        <h5>Daya listrik : 3200</h5>
                        <h5>Kecepatan Internet : 10Mb</h5>
                    </div>

                    <div class="three">
                        <h3>DATA SISWA TAHUN AJARAN  {{ $data_sekolah->tahun_ajaran}}</h3>
                        <div class="container tabel">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="background: #0F5B77; width: 50%;">Jenis Kelamin</th>
                                    <th style="background: #0F5B77;">Jumlah</th>
                                </tr>
                                
                                    
                               
                                <tr>
                                    <td>Laki-Laki</td>
                                    <td> {{ $data_siswa->jumlah_laki_laki}}</td>
                                </tr>
                                <tr>
                                    <td>{{ $data_siswa->jumlah_perempuan}}</td>
                                    <td>283</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>-</td>
                                </tr> @endforeach
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    @endforeach
@endsection
