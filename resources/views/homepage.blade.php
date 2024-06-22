@extends('layout.template')

@section('title', 'Homepage')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <p>Sumber pengetahuan dan inspirasi untuk seluruh masyarakat.Dengan koleksi yang beragam dan layanan yang
                    inovatif, kami berkomitmen untuk mendorong kegemilangan intelektual dan kreatifitas melalui literasi dan
                    pendidikan.
                </p>
            </div>
        </div>
    </div>
    <br>

    <h1>Popular Book</h1>

    <div class="scroll-container"
        style="display: flex; flex-direction: row; max-width: 100%; margin-bottom: 20px; position: relative;">
        @foreach ($books as $book)
            <div class="col-lg-2" style="margin-right: 5px;">
                <div class="card mb-3" style="max-width: 250px; height: 400px;">
                    <div class="card-body" style="max-width: 250px;">
                        <!-- Tambahkan gaya CSS untuk membuat ukuran gambar tetap sama tinggi dan lebar -->
                        <div style="overflow: hidden; height: 150px; margin-bottom: 10px;">
                            <img src="/images/{{ $book->foto_sampul }}" class="img-fluid" alt="..."
                                style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->pengarang }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div><br>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-right">
                <img src="images/sampul/gambar2.jpg" alt="Gambar" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="text-left">Visi</h3>
                <p class="text-left">Menjadi pusat pengetahuan unggul yang mendorong kegemilangan intelektual dan
                    kreatif masyarakat.</p>
                <h3 class="text-left">Misi</h3>
                <hr>
                <ul class="text-left">
                    <li>Menyediakan koleksi bahan bacaan yang bervariasi dan berkualitas untuk memenuhi kebutuhan pembaca
                        segala usia.
                    </li>
                    <li>Memberikan layanan inovatif dan berbasis teknologi guna mempermudah akses dan pemanfaatan koleksi.
                    </li>
                    <li>Mengadakan program-program edukatif dan budaya untuk memupuk minat baca dan pengembangan diri.</li>
                    <li>Menjadi wadah bagi komunitas untuk berbagi pengetahuan dan pengalaman.</li>
                </ul>
            </div>
        </div>
    </div>

    <br>

    <h2 align="center" style="font-size: 40px">Daftar Buku</h2>
    <h3 align="center" style="font-size: 25px">Buku Perpustakaan Gemilang Perpustakaan</h3><br>
    <div class="row">
        @foreach ($books as $book)
            {{ $book->name }}
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/images/{{ $book->foto_sampul }}" class="img-fluid rounded-end" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku : {{ $book->title }}</h5>
                                <p class="card-text">Pengarang : {{ $book->pengarang }}
                                    <br>Penerbit : {{ $book->penerbit }}
                                    <br>Tahun Terbit : {{ $book->tahun }}
                                </p>
                                <a href="/book/{{ $book->id }}" class="btn btn-success">Lihat Selanjutnya</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $books->links() }}
        </div>
    </div>

@endsection
