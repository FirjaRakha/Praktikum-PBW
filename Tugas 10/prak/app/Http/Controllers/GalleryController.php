<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        return view('gallery');
    }
}
