@extends('layouts.master')

@section("title")
    Edit Genre
@endsection

@section("content")
    <form action="/genre/{{$genre->id}}" method="post">
        @method ('PUT')
        <input type="hidden" name="_method" value="PUT">
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
        <label class="form-label">Nama Genre</label>
        <input type="text" value="{{$genre->nama}}" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi Genre</label>
        <textarea name="deskripsi" type="password" class="form-control" rows="10" cols="30">{{$genre->deskripsi}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection