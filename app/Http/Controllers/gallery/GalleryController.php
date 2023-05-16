<?php

namespace App\Http\Controllers\gallery;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        return view('admin.galleries.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Gallery::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('categories.index');
    }

}
