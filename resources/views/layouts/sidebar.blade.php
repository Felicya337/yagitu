<div class="sidebar">
    <div class="image-container text-center">
        <img src="{{ asset('assets/img/smandu.png') }}" alt="Smandu Logo" class="logo-img">
        <img src="{{ asset('assets/img/yasop.png') }}" alt="Yasop Logo" class="logo-img">
        <img src="{{ asset('assets/img/kemendikbud.png') }}" alt="Kemendikbud Logo" class="logo-img">
    </div>

    <nav id="navmenu" class="navmenu">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ url('/a_profile') }}">
                    <i class="fas fa-user"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/a_berita') }}">
                    <i class="fas fa-newspaper"></i> Berita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/a_pengunguman') }}">
                    <i class="fas fa-bullhorn"></i> Pengumuman
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/a_galery') }}">
                    <i class="fas fa-images"></i> Galeri
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/a_contact') }}">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
        </ul>
    </nav>
</div>
