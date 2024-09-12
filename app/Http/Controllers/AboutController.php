<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
         return view('about.index',compact('about'));
    }

    public function create(){
        return view('about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        About::create($request->all());

        return redirect()->route('about.index');
    }

    public function show (string $id)
    {
        $about = About::findOrFail($id);

        return view('about.show',compact('about'));
    }

    public function edit (string $id)
    {
        $about = About::findOrFail($id);

        return view('about.edit', compact('about'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $about = About::findOrFail($id);

        $about->update([
            'judul'=>$request->input('judul'),
            'deskripsi'=>$request->input('deskripsi'),
        ]);

        return redirect()->route('about.index')->with('success', 'Data Berhasil Di Perbarui');
    }
    
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('about.index')->with('succes', 'Data Telah Dihapus');
    }

}
