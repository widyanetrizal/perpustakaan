@extends('layout.template')

@section('title', $book['title'])

@section('content')

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-9">
                <div class="card-body">
                    <h2 class="card-title">{{ $book['title'] }}</h2>
                    <p class="card-text">{{ $book['description'] }}</p>
                    <p class="card-text">Kategori : {{ $book->category->nama_kategori }}</p>
                    <p class="card-text">Tahun : {{ $book['tahun'] }}</p>
                    <p class="card-text">Pengarang : {{ $book['pengarang'] }}</p>
                    <p class="card-text">Penerbit : {{ $book['penerbit'] }}</p>
                    <p class="card-text">Halaman : {{ $book['halaman'] }}</p>
                    <a href="/" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="/images/{{ $book['foto_sampul'] }}" class="img-fluid rounded-end" alt="...">
            </div>
        </div>
    </div>

@endsection
