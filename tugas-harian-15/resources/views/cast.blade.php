@extends('layout.master')

@section('title', 'Cast')

@section('content')

@if(session('success'))

<div class="text-white text-l bg-green-600 container text-center mx-auto mt-8 p-4 font-bold">
    {{ session('success') }}
</div>

@endif

<div class="grid grid-cols-3 m-12 mx-24">
@forelse ($casts as $key => $item )
        <div class="bg-gray-100 shadow-xl p-12 mx-6 my-6">
            <p class="m-6 text-2xl font-bold  ">
                Nama : {{ $item->nama }}
            </p>
            <p class="m-6 text-2xl font-bold  ">
                Umur : {{ $item->umur }}
            </p>
            <p class="m-6 text-2xl font-bold  ">
                Bio : {{ $item->bio }}
            </p>
            <a href="{{ url("/cast/$item->id") }}" class="bg-blue-700 text-white font-bold py-2 px-6 ml-6">
                Detail
            </a>
            <a href="{{ url("/cast/$item->id/edit") }}" class="bg-green-700 text-white font-bold py-2 px-6 ml-6">
                Edit
            </a>
            <form action="/cast/{{ $item->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="bg-red-600 text-white font-bold py-2 px-6 ml-6 mt-6">
            </form>
        </div>
@empty
<h1>No Cast Found</h>
@endforelse
</div>


@endsection