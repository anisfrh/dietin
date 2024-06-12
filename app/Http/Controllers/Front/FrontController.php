<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function landingpage() {
        $artikels = Artikel::all();
        return view('front.pages.landingpage', compact('artikels'));
    }
}
