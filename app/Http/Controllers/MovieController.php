<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function movieIsShowing(){
        $datenow = date("Y-m-d");
        $movies = Movie::where('Ngaykhoichieu', '<=' , $datenow )->where('status' ,'1')->take(7)->orderBy('Id', 'DESC')->get();
        return view('movie.movieIsShowing', compact('movies'));
    }
    public function upcomingMovie(){
        $datenow = date("Y-m-d");
        $movies = Movie::where('Ngaykhoichieu', '>' , $datenow)->where('status' ,'1')->take(7)->orderBy('Id', 'DESC')->get();
        return view('movie.upcomingMovie', compact('movies'));
    }
    public function details($id){
        $movie = Movie::findOrFail($id);
        $movies = Movie::where('status' ,'1')->get();
        return view('movie.details')->with(['movie' => $movie, 'movies' => $movies]);
    }
}
