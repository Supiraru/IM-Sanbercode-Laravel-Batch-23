@extends('layout.master')

@section('title', 'Create')

@section('content')

<div class="flex items-center min-h-screen bg-gray-50">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white border-2 p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 ">Create Cast</h1>
                <p class="text-gray-400 ">Fill up the form below</p>
            </div>
            <div class="m-7">
                <form action="/cast" method="POST" id="form">
                    @csrf
                    <div class="mb-6">
                        @error('nama')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="nama" class="block mb-2 text-sm text-gray-600">Name</label>
                        <input type="text" value="{{ old('nama', '') }}" name="nama" id="nama" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('umur')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="umur" class="block mb-2 text-sm text-gray-600 ">Umur</label>
                        <input type="umur" value="{{ old('umur', '') }}" name="umur" id="umur" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    </div>
                    <div class="mb-6">
                        @error('bio')
                            <div class="text-red-300 font-bold">{{ $message }}</div>
                        @enderror
                        <label for="bio" class="block mb-2 text-sm text-gray-600">Bio</label>
                        <input rows="5" name="bio" id="bio" value="{{ old('bio', '') }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 "></input>
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Create</button>
                    </div>
                    <p class="text-base text-center text-gray-400" id="result">
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection