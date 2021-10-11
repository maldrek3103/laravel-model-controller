<?php

namespace App\Http\Controllers;

use App\MovieModel;

class MovieController extends Controller
{
    public function index()
    {
        $movies = MovieModel::all();
        return view('home', compact('movies'));
    }
}
