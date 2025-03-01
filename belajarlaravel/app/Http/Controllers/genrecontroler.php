<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class genrecontroler extends Controller
{   
    // Create
    public function create()
    {
        return view('genre.create');
    }
    
    public function store(Request $request)
    {
        // Validasi 
        $request->validate([
            'nama' => 'required|min:5', 
            'deskripsi' => 'required', 
        ],  $messages = [
            'required'  => 'Inputan :attribute harus diisi.',
            'min'    => 'Inputan :attribute minimal :min karakter',
        ]);

        // Menyimpan data ke dalam database
        DB::table('genre')->insert([
            'nama' => $request->input('nama'), 
            'deskripsi' => $request->input('deskripsi'), 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Redirect ke halaman genre
        return redirect('/genre');
    }

    public function index()
    {
        $genre = DB::table('genre')->get();
        return view('genre.tampil', ['genre' => $genre]);
    }

    public function show($id)
    {
        $genre = DB::table('genre')->find($id);
        return view('genre.detail', ['genre' => $genre]);
    }
    public function edit($id)
    {
        $genre = DB::table('genre')->find($id);
        return view('genre.edit', ['genre' => $genre]);
    }

    public function update(Request $request, $id)
    {
        // Validasi 
        $request->validate([
            'nama' => 'required|min:5', 
            'deskripsi' => 'required', 
        ],  $messages = [
            'required'  => 'Inputan :attribute harus diisi.',
            'min'    => 'Inputan :attribute minimal :min karakter',
        ]);

        // update data ke dalam database
        DB::table('genre')
            ->where('id', $id)
            ->update([
                'nama' => $request->input('nama'), 
                'deskripsi' => $request->input('deskripsi'), 
                'updated_at' => Carbon::now()
            ]);

        // Redirect ke halaman genre
        return redirect('/genre');
        
    }

    //delete
    public function destroy($id)
    {
        // Hapus data dari database
        DB::table('genre')->where('id', $id)->delete();
        return redirect('/genre');
    }
}
