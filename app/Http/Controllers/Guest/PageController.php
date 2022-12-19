<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{




    public function movies()
    {
        //dd(Movie::all());
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function movie($id)
    {
        $movies = Movie::all();
        $movie = Movie::find($id);
        //prendere i movies
        //find($id)
        //dd($movie);
        return view('movie', compact('movie', 'movies'));
    }
}
