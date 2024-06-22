<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan - @yield('title', 'Website')</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background:rgb(1, 82, 1)">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="bi bi-book"><b>Gemilang</b></i><br>Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/koleksi">Koleksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Bahasa & Kamus</a></li>
                            <li><a class="dropdown-item" href="#">Teknologi & Ilmu Pengetahuan</a></li>
                            <li><a class="dropdown-item" href="#">Novel & Sastra</a></li>
                            <li><a class="dropdown-item" href="#">Psikologi</a></li>
                            <li><a class="dropdown-item" href="#">Kesehatan</a></li>
                        </ul>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/books/data">Master Book</a>
                        </li>
                    @endauth
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form action="/" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <form action="/logout" method="post">
                                    @csrf
                                    <li>
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </li>
                                </form>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login"><i class="bi bi-person-lock"></i> Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    <div class="container my-2">
        @yield('content')
    </div>

    <footer class="text-white py-2" style="background:rgb(1, 82, 1)">
        <div class="container">
            <h2 class="text-left">Gemilang Perpustakaan</h2>
            <hr>
            <div class="row">
                <!-- Column 1: Visi dan Misi -->
                <div class="col-md-3">
                    <h4>Jam Operasional:</h4>
                    <p class="text-left">Senin - Sabtu: 09.00 - 19.00 WIB<br>
                        Minggu: 10.00 - 16.00 WIB</p>
                    <i class="bi bi-telephone"></i>
                    <i class="bi bi-whatsapp"></i>
                    <i class="bi bi-envelope"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-twitter"></i>
                    <i class="bi bi-youtube"></i>
                </div>

                <!-- Column 2: Profil Perpustakaan -->
                <div class="col-md-5">
                    <h4>Profil</h4>
                    <p align="justify">Gemilang Perpustakaan adalah sumber pengetahuan dan inspirasi untuk seluruh
                        masyarakat. Dengan
                        koleksi yang beragam dan layanan yang inovatif, kami berkomitmen untuk mendorong kegemilangan
                        intelektual dan kreatifitas melalui literasi dan pendidikan.<br>
                        WA+6283165694217<br>
                        0123 456-789 Fax. +6221 5731228<br>
                        Email : info@gemilangperpustakaan.com<br>

                    </p>
                </div>

                <!-- Column 3: Peta dan Copyright -->
                <div class="col-md-4">
                    <h4>Peta</h4>
                    <p>Jln. Dr. Moh. Hatta, Binuang Kp. Dalam, Kec. Pauh, Kota Padang, Sumatera Barat 25176</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.33081856203154!2d100.42567641268582!3d-0.9296893318488187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9cd1e7157cf%3A0x2923f541ceb36e3c!2sGenesis%20Phone%20Cell!5e0!3m2!1sid!2sid!4v1704644237728!5m2!1sid!2sid"
                        width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>

    <div class="text-center text-white py-2" style="background:rgb(1, 49, 1)">
        <p>Copyright &copy; 2023. Widya Netrizal</p>
    </div>


    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
