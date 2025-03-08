@extends('layouts.master')

@section("title")
    Detail Genre
@endsection

@section("content")
<h1 class="text-primary">{{$genre->nama}}</h1>
<p>{{$genre->deskripsi}}</p>
<hr>
<div class="row mb-3">

@forelse ($genre->buku as $item)
        <div class="col-md-4 my-3" >
            <div class="card">
                <img class="img-fluid" src="{{ asset('image/' . $item->gambar) }}" alt="Card image top" style="height: 300px; object-fit: contain;">

                <div class="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <h6 class="card-subtitle mb-4">Stok: {{$item->stok}}</h6>
                    <p class="card-text">{{Str::limit($item->sumary, 100)}}</p>

                    <div class="d-grid gap-2">
                        <a href="/buku/{{$item->id}}" class="btn btn-primary w-100">Baca Selengkapnya</a>
                    </div>
                </div>

            </div>
        </div>
    @empty
    <div class="ml-3">
    <h3> Tidak ada buku yang tersedia di Genre ini</h3>
    </div>
        
    @endforelse
    </div>
</div>
    

<a href="/genre" class="btn btn-secondary btn-sm my-3">Kembali</a>
@endsection