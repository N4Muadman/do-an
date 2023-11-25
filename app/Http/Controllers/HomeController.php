<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index(){
        $movies = Movie::take(10)->orderBy('Id', 'DESC')->get();
        return view('home.index', compact('movies'));
    }
}
