<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function daftar() {
        return view('register');
    }

    public function welcome(Request $request) {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $full = $first_name . ' ' . $last_name;
        return view('welcome', ['full' => $full]);
    }
}
