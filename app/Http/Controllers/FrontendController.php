<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Guru;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index ()
    {
        $guruItem = Guru::all();
        $about = About::all();

        return view('frontend.index', compact('guruItem','about'));
    }
}
