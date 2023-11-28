@extends('layout.layout')

@section('content')
<div class="container">
    <div class="card">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('images/' . $movie['foto_sampul']) }}" class="img-fluid" alt="Gambar {{ $movie['judul'] }}">
        </div>
        <div class="col-md-8">
            <h1>{{ $movie['judul'] }}</h1>
            <p>{{ $movie['sinopsis'] }}</p>
            <p>{{ $movie['tahun']}}</p>
            
            <br>
            
            <a href="{{ route('movies.index') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
</div>
@endsection
