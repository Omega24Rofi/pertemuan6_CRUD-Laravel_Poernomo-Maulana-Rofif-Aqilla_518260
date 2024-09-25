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

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();

        return redirect('/buku');
    }

    public function destroy($id){
        $buku = buku::find($id);
        $buku->delete();

        return redirect('/buku');
    }

    public function edit($id) {
        $buku = Buku::find($id);
        return view('buku.update', compact('buku'));
    }

    // Method to handle the update
    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date',
        ]);

        $buku = Buku::findOrFail($id);

        $buku->update($validatedData);
        return redirect()->route('buku.index')->with('success', 'Book updated successfully');
    }
}
