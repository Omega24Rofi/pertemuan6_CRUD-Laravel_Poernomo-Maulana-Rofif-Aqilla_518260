<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class MovieController extends Controller
{
    public function index(){
        $data_movie = movie::all();

        return view('movie.index', compact('data_movie'));
    }
}
