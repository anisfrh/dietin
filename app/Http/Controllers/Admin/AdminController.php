<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homepage() {
        $artikels = Artikel::all();
        return view('admin.homepageAdmin', compact('artikels'));
    }

    public function faq() {
        return view('admin.faq');
    }

    public function tentangkami()
    {
        return view('admin.tentangKami');
    }

    public function bacaan($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel', compact('artikel'));
    
    }

    
}
