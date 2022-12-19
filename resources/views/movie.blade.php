@extends('layouts.app')


@section('main-content')
<section class="movie">
    <div class="container">
        <div class="row justify-content-center mt-4">
            @if(!isset($movie))
            <div class="col-4 invalid-movie d-flex align-items-center">
                <h1 class="text-center">No movie to show....</h1>
            </div>
            @else
            <div class="col-4 p-3">
                <img class="card-img-top" src="{{$movie['cover_image']}}" alt="{{$movie['original_title']}}">
            </div>
            <div class="col-8 p-3 d-flex flex-column">
                <div class="movie-details bg-dark text-white rounded-2 mt-2">
                    <h4 class="card-title">{{$movie['original_title']}}</h4>
                    <span class="date">{{$movie['date']}}</span>
                    <p class="card-text">{{$movie['description']}}</p>
                </div>
                <div class="stars d-flex my-5">
                    @for($i = 0; $i < 5; $i++) @if($i < round($movie['vote']/2))<i class="fa-solid fa-star fa-3x ms_star-yellow"></i>
                        @else
                        <i class="fa-regular fa-star fa-3x"></i>
                        @endif
                        @endfor
                </div>

            </div>
            @endif
        </div>
    </div>
</section>

</div>

@endsection