@extends('layouts.master')

@section("title")
    Edit Buku
@endsection

@section("content")
    <form action="/buku/{{$buku->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf

    <div class="mb-3">
        <label class="form-label">Genre</label><br>
        <select name="genres_id" id="" class="form-control">
            <option value="">--Pilih Genre--</option>
            @forelse ($genre as $item)
            @if ($item->id == $buku->genres_id)
            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
            @else
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endif
            @empty
            <option value="">Tidak ada genre yang tersedia</option>
            @endforelse
        </select>
        </div><br><br>  
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" value="{{$buku->judul}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stok" class="form-control" value="{{$buku->stok}}">
        </div>
    <div class="mb-3">
        <label class="form-label">Ringkasan Buku</label>
        <textarea name="sumary" class="form-control" rows="10" cols="30">{{$buku->sumary}} </textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection