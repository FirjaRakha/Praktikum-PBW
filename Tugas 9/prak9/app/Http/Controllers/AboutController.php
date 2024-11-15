<!-- https://youtube.com/playlist?list=PLRKMmwY3-5MyxehZjs_S_KBvI3pnPk0mi&si=223LeUvI63CRPU70 -->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        return view('about');
    }
}
