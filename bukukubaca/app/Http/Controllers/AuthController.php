<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\profil;

class AuthController extends Controller
{
    public function tampilregister()
    {
        return view('auth.register');
    }
    public function registeruser(Request $request)
    {   //validasi
        $request->validate([
            'nama' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $userCount = User::count();
        //kedatabase
        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->input('password'));
        $user->role = $userCount == 0 ? 'admin' : 'user';
        $user->save();
        return redirect('/')->with('success', 'Daftar berhasil');
    }

    //login
    public function tampillogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Masuk Berhasil');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    //logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Keluar Berhasil');
    }

    //profil
    public function getprofil()
    {
        $userAuth = Auth::user()->profil;
        $userId = Auth::id();
        $userData = User::find($userId);
        $profilData = Profil::where('user_id', $userId)->first();

        if ($userAuth) {
            return view("profil.edit",[ 'profil' => $profilData]);
        } else {
            return view("profil.create");
        }
    }

    public function createProfil(Request $request)
    {
        $request->validate([
            'umur' => 'required|numeric',
            'alamat' => 'required|min:5',
        ]);

        $userId = Auth::id();

        $profil = new Profil;
        $profil->umur = $request->umur;
        $profil->alamat = $request->alamat;
        $profil->user_id = $userId;
        $profil->save();

        return redirect('/profil')->with('success', 'Profil berhasil dibuat');
    }

    public function updateProfil(Request $request,$id)
    {
        $request->validate([
            'umur' => 'required|numeric',
            'alamat' => 'required|min:5',
        ]);


        $profil = Profil::find($id);
        $profil->umur = $request->umur;
        $profil->alamat = $request->alamat;
        $profil->save();

        return redirect('/profil')->with('success', 'Profil berhasil diedit');
    }
}
