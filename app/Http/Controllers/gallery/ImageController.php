<?php

namespace App\Http\Controllers\gallery;

use App\Http\Controllers\Controller;
use App\Models\galleries;
use App\Models\images;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function create()
    {
//        $galleries = Image::all();
//        return view('admin.images.create', compact('galleries'));
        return view('admin.images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gallery_id' => 'required|exists:galleries,id',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('public/images');

        Image::create([
            'name' => $request->name,
            'path' => $imagePath,
            'gallery_id' => $request->gallery_id,
        ]);
        return redirect()->route('categories.index');
    }

}
