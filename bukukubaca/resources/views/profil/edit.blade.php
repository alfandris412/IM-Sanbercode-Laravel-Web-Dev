@extends('layouts.master')

@section("title")
    Edit Profil
@endsection

@section("content")
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<form action="/profil/{{$profil->id}}" method="post" > 
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @method ('PUT')
        @csrf
    <div class="mb-3">
        <label class="form-label">Umur</label>
        <input type="numeric" name="umur" value="{{$profil->umur}}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" rows="10" cols="30">{{$profil->alamat}}</textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection