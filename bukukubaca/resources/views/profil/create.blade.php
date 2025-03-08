@extends('layouts.master')

@section("title")
    Buat Profil
@endsection

@section("content")
<form action="/profil" method="post" > 
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
        <label class="form-label">Umur</label>
        <input type="numeric" name="umur" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" rows="10" cols="30"></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection