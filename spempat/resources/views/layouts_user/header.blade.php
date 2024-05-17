<header style="margin-bottom: 80px;">
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
                    <a class="nav-link" href="{{ route('dashboarduser') }}">Home</a>
                </li>
                <li class="nav-item dropdown menu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profil Sekolah
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a style="color: black;" class="dropdown-item" href="{{ route('data_sekolah') }}">Data Sekolah</a></li>
                        <li><a style="color: black;" class="dropdown-item" href="{{ route('sejarah') }}">Sejarah Sekolah</a></li>
                        <li><a style="color: black;" class="dropdown-item" href="guru_staff">Data Guru dan Staf</a>
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
                    <a class="nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item title">
                    <a class="nav-link" href="About_us">About Us</a>
                </li>
                @if (Route::has('login'))
                    <li class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ route('dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Log in
                            </a>
                        @endauth
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>