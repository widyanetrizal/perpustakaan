@extends('layout.template')

@section('title', 'Koleksi')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Daftar Koleksi Buku</h1>
    <div class="row">
        @foreach ($books as $book)
            {{ $book->name }}
            <div class="col-12">
                <div class="card mb-7">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="/images/{{ $book->foto_sampul }}" class="img-fluid rounded-end m-3" alt="...">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body m-3">
                                <h4 class="card-title">Judul Buku : {{ $book->title }}</h4>
                                <p class="card-text" align="justify">
                                    Pengarang : {{ $book->pengarang }}<br>
                                    Penerbit : {{ $book->penerbit }}<br>
                                    Tahun Terbit : {{ $book->tahun }}<br>
                                    Sinopsis : <br>{{ $book['description'] }}
                                </p>
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
