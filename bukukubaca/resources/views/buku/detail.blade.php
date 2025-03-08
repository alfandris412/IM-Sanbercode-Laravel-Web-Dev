@extends('layouts.master')
@section("title")
    Detail Buku
@endsection

@section("content")
    <img src="{{asset('image/'.$buku->gambar)}}" width="100%" height="500px" style="object-fit: contain; display: block; margin: 0 auto;" class="mb-5" alt="">
    <h1 class="text-primary">{{$buku->judul}}</h1>
    <h4 class="text-secondary">Stock: {{$buku->stok}}</h4>
    <p>{{$buku->sumary}}</p>
    <hr>
    <h1>List Komentar</h1>
    @forelse($buku->komen as $item)
    <div class="card my-3">
    <div class="card-header">
        {{$item->owner->nama}}
    </div>
    <div class="card-body">
        <p class="card-text">{{$item->content}}</p>
    </div>
    </div>
    @empty
        <h3>Tidak ada komentar</h3>
    @endforelse

    <hr>

    <h3>Buat Komentar</h3>
    @auth
    <form action="/komen/{{$buku->id}}" method="post" enctype="multipart/form-data">
             @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="mb-3">
        <textarea name="content" class="form-control" rows="10" cols="30" placeholder="Isi Komentar"> </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
    </form>@endauth
@endsection