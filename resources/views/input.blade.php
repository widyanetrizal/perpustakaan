@extends('layout.template')
@section('title', 'Tambah Buku Baru')
@section('content')
    <h2 class="mb-4">Tambah Buku Baru</h2>
    <form action="/books/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID Buku:</label>
            <input type="text" class="form-control" id="id" name="id" required="">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul:</label>
            <input type="text" class="form-control" id="title" name="title" required="">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori:</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required=""></textarea>
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun Terbit:</label>
            <input type="number" class="form-control" id="tahun" name="tahun" required="">
        </div>
        <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang:</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" required="">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit:</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" required="">
        </div>
        <div class="mb-3">
            <label for="halaman" class="form-label">Halaman:</label>
            <input type="number" class="form-control" id="halaman" name="halaman" required="">
        </div>
        <div class="mb-3">
            <label for="foto_sampul" class="form-label">Foto Sampul:</label>
            <input type="file" class="form-control" id="foto_sampul" name="foto_sampul" required="">

        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/books/data" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection
