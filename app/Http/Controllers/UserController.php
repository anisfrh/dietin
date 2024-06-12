<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function homepage()
    {
        $artikels = Artikel::all();
        return view('users.homepageUser', compact('artikels'));
    }

    public function faq()
    {
        return view('users.faq');
    }

    public function tentangkami()
    {
        return view('users.tentangkami');
    }

    // public function bacaan(){
    //     return view('users.artikel');
    // }

    public function bacaan($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('users.artikel', compact('artikel'));
    
    }

    public function contactus()
    {
        return view('users.contact');
    }
    
}
