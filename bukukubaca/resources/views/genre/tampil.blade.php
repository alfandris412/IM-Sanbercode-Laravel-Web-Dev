@extends('layouts.master')

@section("title")
    Tampil Genre
@endsection

@section("content")
    @auth @if (Auth()->user()->role == 'admin')
    <a href="/genre/create" class="btn btn-primary my-3">Tambah</a>
    @endif
    @endauth
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genre as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$item->nama}}</td>
                    <td>
                    <form action="/genre/{{$item->id}}" method="post">
                    <a href="/genre/{{$item->id}}" class="btn btn-primary btn-sm">Detail</a>
                    @auth @if (Auth()->user()->role == 'admin')
                    <a href="/genre/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" value="delete" class="btn btn-danger btn-sm">Delete</button>
                        @endif
                    @endauth
                    </form>
                </tr>
        
            @empty
                <tr>
                    <td>Tidak Ada Data Genre</td>
                </tr>

            @endforelse
        </tbody>
    </table>
@endsection