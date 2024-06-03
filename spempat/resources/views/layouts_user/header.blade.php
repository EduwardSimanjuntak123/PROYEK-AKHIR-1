<header style="margin-bottom: 70px;">
    <nav class="navbar navbar-expand-lg fixed-top col-md-12 header">
        <a style="font-size: 30px; color: #fff; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.733);" class="navbar-brand logo" href="#">
            <img  src="{{ asset('img/Tutwuri.png') }}" alt="SMPN 4" width="40" />
            SMPN 4 BALIGE
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item title">
                    <a class="nav-link" href="{{ route('dashboarduser') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown menu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profil Sekolah
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a style="color: black;" class="dropdown-item" href="{{ route('data_sekolah') }}">Data Sekolah</a></li>
                        <li><a style="color: black;" class="dropdown-item" href="{{ route('sejarah') }}">Sejarah Sekolah</a></li>
                        <li><a style="color: black;" class="dropdown-item" href="/guru_staff">Data Guru dan Staf</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item title">
                    <a class="nav-link" href="{{ route('visimisi') }}">Visi Misi</a>
                </li>

                <li class="nav-item title">
                    <a class="nav-link" href="{{ route('fasilitas') }}">Fasilitas</a>
                </li>
                <li class="nav-item title">
                    <a class="nav-link" href="/Galeri">Galeri</a>
                </li>

                <li class="nav-item title">
                    <a class="nav-link" href="/About_us">Tentang Kami</a>
                </li>
               
            </ul>
        </div>
    </nav>
</header>
