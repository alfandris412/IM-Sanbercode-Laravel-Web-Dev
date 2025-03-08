<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komen;
use Illuminate\Support\Facades\Auth;

class KomenController extends Controller
{
    public function owner(Request $request, $bukus_id){
        $request->validate([
            'content' => 'required']);
        $userId = Auth::id();
        
        $komen = new Komen;
        $komen->content = $request->input('content');
        $komen->bukus_id = $bukus_id;
        $komen->users_id = $userId;

        $komen->save();
        return redirect('/buku/'.$bukus_id);
    }

    public function index() {
        $komens = Komen::all();

        // Pastikan $komens adalah array atau objek sebelum diiterasi
        if (is_array($komens) || is_object($komens)) {
            foreach ($komens as $komen) {
                // ...proses setiap komen...
            }
        } else {
            // Handle error jika $komens bukan array atau objek
            return redirect()->back()->withErrors('Data komen tidak valid.');
        }

        return view('komen.index', compact('komens'));
    }
}
