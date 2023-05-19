<?php

namespace App\Http\Controllers\gallery;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        return view('admin.galleries.create', compact('categories'));
    }

//

    public function StoreMultiImage(Request $request){

        $image = $request->file('images');

        foreach ($image as $multi_image) {

            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($multi_image)->resize(220,220)->save('upload/images/'.$name_gen);
            $save_url = 'upload/images/'.$name_gen;

            Gallery::insert([
                'images' => $save_url,
                'category_id' => $request->category_id,
                'created_at' => Carbon::now()

            ]);

        } // End of the froeach


        $notification = array(
            'message' => 'Multi Image Inserted Successfully',
            'alert-type' => 'success'
        );

        //return redirect()->route('all.multi.image')->with($notification);
        return redirect()->back()->with($notification);

    }// End Method




}
