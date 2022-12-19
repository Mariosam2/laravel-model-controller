@extends('layouts.app')

@section('main-content')>
<section class="movies">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
            @forelse($movies as $movie)
            <div class="col">
                <a href="#" class="d-block">
                    <div class="card">

                        <img class="card-img-top" src="{{$movie['cover_image']}}" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title">{{$movie['original_title']}}</h4>
                            <span class="date fw-semibold">({{date('Y', strtotime($movie['date']))}})</span>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col">
                <h1>No movies to show...</h1>
            </div>
            @endforelse
        </div>
    </div>
</section>

@endsection