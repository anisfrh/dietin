<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    // This method will show products page
    public function index() {

        // $artikels = Artikel::orderBy('created_at','DESC')->get();

        // return view('artikels.indexArtikel',[
        //     'artikels' => $artikels
        // ]);

        $artikel = Artikel::all();

        return view('artikels.indexArtikel', compact('artikel'));
    }

    // This method will show create product page
    public function create() {
        return view('artikels.createArtikel');
    }

    // This method will store a product in db
    public function store(Request $request) {
        $rules = [
            'title' => 'required',
            'artikel' => 'required',       
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('artikels.create')->withInput()->withErrors($validator);
        }

        // here we will insert product in db
        $artikel = new Artikel();
        $artikel->title = $request->title;
        $artikel->artikel = $request->artikel;
        $artikel->slug = Str::slug($request->title);
        $artikel->save();

        if ($request->image != "") {
            // here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to products directory
            $image->move(public_path('uploads/artikels'),$imageName);

            // Save image name in database
            $artikel->image = $imageName;
            $artikel->save();
        }        

        return redirect()->route('artikels.index')->with('success','Product added successfully.');
    }

    // This method will show edit product page
    public function edit($id) {
        $artikel = Artikel::findOrFail($id);
        return view('artikels.editArtikel',[
            'artikel' => $artikel
        ]);
    }

    // This method will update a product
    public function update($id, Request $request) {

        $artikel = Artikel::findOrFail($id);

        $rules = [
            'title' => 'required',
            'artikel' => 'required',              
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('artikels.edit',$artikel->id)->withInput()->withErrors($validator);
        }

        // here we will update artik$artikel
        $artikel->title = $request->title;
        $artikel->artikel = $request->artikel;
        $artikel->artikel = $request->artikel;
        $artikel->slug = Str::slug($request->title);
        $artikel->save();


        if ($request->image != "") {

            // delete old image
            File::delete(public_path('uploads/artikels/'.$artikel->image));

            // here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to products directory
            $image->move(public_path('uploads/artikels'),$imageName);

            // Save image name in database
            $artikel->image = $imageName;
            $artikel->save();
        }        

        return redirect()->route('artikels.index')->with('success','Article updated successfully.');
    }

    // This method will delete a Article
    public function destroy($id) {
        $artikel = Artikel::findOrFail($id);

       // delete image
       File::delete(public_path('uploads/artikels/'.$artikel->image));

       // delete artikel from database
       $artikel->delete();

       return redirect()->route('artikels.index')->with('success','Article deleted successfully.');
    }
    

    public function searchArtikel(Request $request)
    {
        if ($request->has('search')) {
           $artikel = Artikel::where('title', 'LIKE', '%' . $request->search . '%')->get();
        } else {
           $artikel = Artikel::all();
        }

        return view('artikels.indexArtikel', compact('artikel'));
    }
}
