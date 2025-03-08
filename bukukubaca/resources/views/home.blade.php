@extends('layouts.master')

@section("title")
    Home
@endsection


@section("content")
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif

    @auth
        <h4 style="color:grey">Selamat Datang {{Auth()->user()->nama }}
         
        @if (Auth()->user()->profil)
        ({{Auth()->user()->profil->umur}} Tahun)
        @else
        @endif
        </h4> <hr>
    @endauth
    <h1>BukuKuBaca</h1>
  
    <h2>Media Referensi Buku Terbaik</h2>
    <p>Membaca Adalah Pintu Awal Menuju Kesuksesan</p>
    <h3>Apa Isi Dari BukuKuBaca</h3>
    <ul>
        <li>Berbagai macam genre buku</li>
        <li>Ringkasan buku</li>
        <li>Forum referensi buku</li>
    </ul>
    <h3>Cara Bergabung ke BukuKuBaca</h3>
    <ol>
        <li>Mengunjungi Website kita</li>
        <li>Mendaftar Di <a href="/register">Form Sign Up</a></li>
        <li>Selesai!. Kamu sudah bisa mengakses berbai macam buku</li>
    </ol>
@endsection
