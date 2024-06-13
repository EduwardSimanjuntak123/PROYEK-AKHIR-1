<aside id="sidebar">
    <div class="d-flex">
        <button id="toogle-btn" type="button"> <i class="lni lni-grid-alt"></i></button>
        <div class="sidebar-logo">
            <a href="{{ route('dashboard') }}"> SMP N 4 Balige</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="{{ route('dashboard') }}" class="sidebar-link">
                <i class="lni lni-dashboard"></i>
                <span>Beranda</span>
            </a>
        </li>
        <li class="sidebar-item ">
            <a href="{{ route('kritik') }}" class="sidebar-link ">
                <i class="lni lni-wechat"></i>
                <span>Kritik dan saran</span>
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
                <span>Guru dan Staff</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('data_sekolah.index') }}" class="sidebar-link">
                <i class="lni lni-folder"></i>
                <span>Data Sekolah</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('data_sarpras.index') }}" class="sidebar-link">
                <i class="lni lni-dropbox"></i>
                <span>Data Sarpras</span>
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
                <i class="lni lni-flag-alt"></i>
                <span>Tentang Kami</span>
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