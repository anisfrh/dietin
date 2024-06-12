<?php

namespace App\Http\Controllers\Api;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::orderBy('id', 'desc')->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data Article',
            'data' => $artikel
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artikel' => 'required',  
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('uploads/artikels', $filename);
        $artikel = Artikel::create([
            'title' => $request->title,
            'artikel' => $request->artikel,
            'image' => $filename,
        ]);

        if ($artikel) {
            return response()->json([
                'success' => true,
                'message' => 'Article Created',
                'data' => $artikel
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Article Failed to Save',
            ], 409);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::where('id', $id)->first();

        if(!$artikel) {
            return MessageHelper::error(false, 'Data Tidak ditemukan');
        }

        Storage::delete($artikel->image);
        $artikel->delete();
        return MessageHelper::error(true, 'Berhasil Menghapus Data');
    }

    public function format($artikel)
    {

        return [
            'title' => $artikel->title,
            'artikel' => $artikel->artikel,
            'image' => $artikel->image,
            'tanggal_tambah_produk' => Carbon::parse($artikel->created_at)->translatedFormat('d F Y'),
        ];
    }

    public function respons($artikel)
    {
        return response()->json([
            'status' => true,
            'data' => $artikel,
        ], 200);
    }

    public function errorStatus($status, $msg)
    {
        return response()->json([
            'status' => $status,
            'message' => $msg,
        ], 200);
    }
}
