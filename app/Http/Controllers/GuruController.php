<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Guru::all();
        return view('guru.index',compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_guru'=>'required',
            'bidang'=>'required',
            'foto'=>'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $filename = time(). '.'  .$request->foto->extension();

        $request->foto->move(public_path('images'),$filename);

        Guru::create([
            'nama_guru'=> $request->nama_guru,
            'bidang'=> $request->bidang,
            'foto'=>$filename
        ]);

        return redirect()->route('guru.index')->with('Success','Guru Berhasil Di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.show',compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit',compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $request->validate([
            'nama_guru'=>'required',
            'bidang'=>'required',
            'foto'=>'images|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($request->hasFile('foto')){
            $filename = time(). '.' .$request->foto->extension();
            $request->foto->move(public_path('images'), $filename);
            $guru->foto = $filename;
        }

        $guru->update([
            'nama_guru'=>$request->nama_guru,
            'bidang'=>$request->bidang,
            'foto'=> $guru->foto
        ]);

        return redirect()->route('guru.index')->with('success','Guru Upadate Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::findOrFail($id);

        $guru->delete();

        return redirect()->route('guru.index')->with('success','Guru Deleted Successfully.');

    }
}