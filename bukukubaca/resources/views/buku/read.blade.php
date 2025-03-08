@extends('layouts.master')
@section("title")
    Tampil Buku
@endsection

@section("content")
@auth
@if (Auth()->user()->role == 'admin')
<a href="/buku/create" class="btn btn-primary my-3">Tambah Buku</a>
@endif
@endauth
<div class="row mb-3">
    @forelse ($buku as $item)
        <div class="col-md-4 my-3" >
            <div class="card">
                <img class="img-fluid" src="{{ asset('image/' . $item->gambar) }}" alt="Card image top" style="height: 300px; object-fit: contain;">

                <div class="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <h6 class="color:blue">Genre: {{$item->genre->nama}}</h6>
                    <h6 class="card-subtitle mb-4">Stok: {{$item->stok}}</h6>
                    <p class="card-text">{{Str::limit($item->sumary, 100)}}</p>

                    <div class="d-grid gap-2">
                        <a href="/buku/{{$item->id}}" class="btn btn-primary w-100">Baca Selengkapnya</a>
                    </div>
                    @auth @if (Auth()->user()->role == 'admin')
                    <div class="d-grid gap-2 mt-3">
                        <div class="row">
                            <div class="col">
                                <a href="/buku/{{$item->id}}/edit" class="btn btn-warning w-100">Edit</a>
                            </div>
                            <div class="col">
                                <form action="/buku/{{$item->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif 
                    @endauth
                </div>

            </div>
        </div>
    @empty
        <h1>Belum ada Buku</h1>
    @endforelse
</div>
@endsection
