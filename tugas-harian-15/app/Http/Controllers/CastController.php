<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CastController extends Controller
{
    public function cast(){
        $casts = DB::table('cast')->get();
        return view('cast', compact('casts'));
    }

    public function create(){
        return view('create');
    }

    public function show($id){
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('show', compact('cast'));
    }

    public function edit($id){
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('edit', compact('cast'));
    }

    public function destroy($id){
        $cast = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast')->with('success', "Berhasil Delete Cast!");
    }

    public function update($id, Request $request){

        $request->validate([
            "nama" => 'required|unique:cast',
            "umur" => 'required',
            "bio" => 'required'
        ]);

        $cast = DB::table('cast')
        ->where('id', $id)
        ->update([
            'nama'=> $request['nama'],
            'umur'=> $request['umur'],
            'bio'=> $request['bio']
        ]);

        return redirect('/cast')->with('success', 'Berhasil Update Post!');
    }

    public function store(Request $request){

        $request->validate([
            "nama" => 'required|unique:cast',
            "umur" => 'required',
            "bio" => 'required'
        ]);

        $query = DB::table('cast')->insert([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);

        return redirect('/cast')->with('success', 'Cast Berhasil disimpan!');

    }
}
