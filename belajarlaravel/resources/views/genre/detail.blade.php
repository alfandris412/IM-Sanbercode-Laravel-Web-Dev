@extends('layouts.master')

@section("title")
    Detail Genre
@endsection

@section("content")
<h1 class="text-primary">{{$genre->nama}}</h1>
<p>{{$genre->deskripsi}}</p>
<a href="/genre" class="btn btn-secondary btn-sm">Kembali</a>
@endsection