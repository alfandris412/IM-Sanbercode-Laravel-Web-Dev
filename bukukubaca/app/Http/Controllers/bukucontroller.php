<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\genre;
use App\Models\Buku;
use App\Models\Komen;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;

class bukucontroller extends Controller implements HasMiddleware
{   
    public static function middleware() :array
    {
        return [
            new Middleware(['auth',IsAdmin::class], except:['index','show'])
    ];
    
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku.read', ['buku' => $buku]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    // Di dalam controller BukuController
public function create()
{
    $genre = Genre::all();
    return view('buku.create', ['genre' => $genre]); 
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'genres_id' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required',
            'sumary' => 'required',
            'stok' => 'required',
            'genres_id' => 'required']);
        
        $newImageName = time().'.'.$request->gambar->extension();  
         
        $request->gambar->move(public_path('image'), $newImageName);

        $buku = new Buku;
        $buku->genres_id = $request->input('genres_id');
        $buku->judul = $request->input('judul');
        $buku->stok = $request->input('stok');
        $buku->sumary = $request->input('sumary');
        $buku->gambar = $newImageName;
 
        $buku->save();
 
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = buku::find($id);
        return view('buku.detail', ['buku' => $buku]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = buku::find($id);
        $genre = Genre::all();
        return view('buku.edit', ['buku' => $buku, 'genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Buku::find($id);
        
            $request->validate([
                'gambar' => 'mimes:jpg,jpeg,png|max:2048',
                'judul' => 'required',
                'sumary' => 'required',
                'stok' => 'required',
                'genres_id' => 'required']);
            if($request->has('gambar')){
                File::delete('image/'.$buku->gambar);

                $newImageName = time().'.'.$request->gambar->extension();
                $request->gambar->move(public_path('image'), $newImageName);
                $buku->gambar = $newImageName;
            }
            $buku ->judul = $request->input('judul');
            $buku ->stok = $request->input('stok');
            $buku ->genres_id = $request->input('genres_id');
            $buku ->sumary = $request->input('sumary');

            $buku->save();
        return redirect('/buku');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = buku::find($id);
        File::delete('image/'.$buku->gambar);
        $buku->delete();
        return redirect('/buku');
    }

}
