<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieSearchController extends Controller
{
    public function index(Request $request){
        $movieName = $request->input('movie_name');
        $category = $request->input('category');
        if($category == 0){
            $movies = Movie::where('Ten', 'like', '%' . $movieName . '%')->get();

        }else if($category == 1){
            $movies = Movie::where('NgayKhoiChieu', '<=',  date('y-m-d'))->where('Ten', 'like', '%' . $movieName . '%')->get();
        }
        else if($category == 2){
            $movies = Movie::where('NgayKhoiChieu', '>=',  date('y-m-d'))->where('Ten', 'like', '%' . $movieName . '%')->get();
        }
        return view('movieSearch.index')->with(['movies' => $movies]);
    }
}
