<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery_Categories;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    public function index()
    {
        $categories = Gallery_Categories::with('galleries')->get();

        return view('admin.gallery.gallery_categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.gallery.create_gallery_categories');
    }

    public function store(Request $request)
    {
        $category = Gallery_Categories::create($request->all());

        return redirect()->route('admin.gallery.gallery_categories')->with('success', 'Category created successfully.');
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
