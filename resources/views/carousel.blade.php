@extends('layout.template')

@section('title', 'Homepage')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif



    <div class="row">
        <div class="col-6">
            <img src="images/sampul/gambar1.jpg" class="img-fluid smaller-image" alt="Gambar 1">
            <img src="images/sampul/gamabar5.jpg" class="img-fluid smaller-image" alt="Gambar 5">
        </div>
    </div>

    <style>
        .smaller-image {
            max-height: 200px;
            /* Sesuaikan dengan tinggi yang diinginkan */
            height: auto;
            /* Menjaga aspek rasio gambar */
        }
    </style>
@endsection
