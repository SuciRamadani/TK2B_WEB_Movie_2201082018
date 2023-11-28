@extends('layout.layout')

@section('content')
<h2 class="text-left">Popular Movie</h2>

<div class="container">
    <div class="row">
        @foreach ($movieData as $movie)
            <div class="col-md-6 py-2">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie['judul'] }}</h5>
                                <p class="card-text">{{ $movie['sinopsis'] }}</p>
                                <a href="{{ route('movies.show', ['id' => $movie['id']]) }}" class="btn btn-danger">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('images/' . $movie['foto_sampul']) }}" class="card-img-top" alt="Gambar {{ $movie['judul'] }}" width="100%" height="100%">
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
