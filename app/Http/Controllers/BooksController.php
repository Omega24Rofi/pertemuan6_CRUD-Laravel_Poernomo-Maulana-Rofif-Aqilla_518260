<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class BooksController extends Controller
{
    public function index(){
        $data_book = buku::all();

        return view('buku.index', compact('data_book'));
    }
}
