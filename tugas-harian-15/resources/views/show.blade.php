@extends('layout.master')

@section('content')

<div class="flex flex-col justify-center">
    <div>
        <h1 class="text-center font-bold my-8 text-xl ">
            Detail of {{ $cast->nama }}
        </h1>
    </div>
    <div class="bg-gray-100 shadow-xl p-12 mx-6 my-6">
        <p class="m-6 text-2xl font-bold  ">
            Nama : {{ $cast->nama }}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Umur : {{ $cast->umur }}
        </p>
        <p class="m-6 text-2xl font-bold  ">
            Bio : {{ $cast->bio }}
        </p>
    </div>
</div>

@endsection
