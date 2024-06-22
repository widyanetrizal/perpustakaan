@extends('layout.template')

@section('title', 'Data Book')

@section('content')

    <h1>Data Master Book</h1>
    <a href="/books/create" class="btn btn-danger">Input New Book</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tahun</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Halaman</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->category->nama_kategori }}</td>
                    <td>{{ $book->tahun }}</td>
                    <td>{{ $book->pengarang }}</td>
                    <td>{{ $book->penerbit }}</td>
                    <td>{{ $book->halaman }}</td>
                    <td><img src="/images/{{ $book->foto_sampul }}" class="img-fluid" alt="..."
                            style="object-fit: cover; width: 255px; height: 135px;"></td>
                    <td class="text-nowrap">
                        <a href="/books/{{ $book->id }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/book/delete/{{ $book->id }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $books->links() }}
    </div>
@endsection
