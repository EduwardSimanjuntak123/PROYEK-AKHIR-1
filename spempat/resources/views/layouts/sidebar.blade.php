<aside id="sidebar">
    <div class="d-flex">
        <button id="toogle-btn" type="button"> <i class="lni lni-grid-alt"></i></button>
        <div class="sidebar-logo">
            <a href="{{ route('dashboard') }}"> smp n 4 balige</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="{{ route('dashboard') }}" class="sidebar-link">
                <i class="lni lni-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item ">
            <a href="{{ route('kata_sambutan.index') }}" class="sidebar-link ">
                <i class="lni lni-popup"></i>
                <span>Kata sambutan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('gurustaff.index') }}" class="sidebar-link">
                <i class="lni lni-users"></i>
                <span>GURU DAN STAFF</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('data_sekolah.index') }}" class="sidebar-link">
                <i class="lni lni-folder"></i>
                <span>DATA SEKOLAH</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('data_sarpras.index') }}" class="sidebar-link">
                <i class="lni lni-dropbox"></i>
                <span>DATA SARPRAS</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('berita.index') }}" class="sidebar-link">
                <i class="lni lni-bullhorn"></i>
                <span>Berita</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('galeri.index') }}" class="sidebar-link">
                <i class="lni lni-image"></i>
                <span>Galeri</span>
            </a>
        </li>
      
        
        <li class="sidebar-item">
            <a href="{{ route('about_us.index') }}" class="sidebar-link">
                <i class="lni lni-cogs"></i>
                <span>ABOUT US</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="{{ route('logout') }}" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>logout</span>
        </a>
    </div>
</aside>