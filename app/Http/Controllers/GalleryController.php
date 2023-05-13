<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    //
    public function HomeGallery(){
        $homegallery = Gallery::find(1);
        return view('admin.gallery.gallery_all',compact('homegallery'));

    }

    public function UpdateGallery(Request $request){
        $picture_id = $request->id;

        if ($request->file('gallery')) {// if there is an image
            $image = $request->file('gallery');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(636,852)->save('upload/gallery_images/'.$name_gen);//resizing using  the pkg
            $save_url = 'upload/gallery_images/'.$name_gen;

            Gallery::findOrFail($picture_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'picture' => $save_url,

            ]);
            $notification = array(
                'message' => 'gallery Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } else{// with out image

            Gallery::findOrFail($picture_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,

            ]);
            $notification = array(
                'message' => 'gallery Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        } // end Else

    } // End Method
//multi image
    public function galleryMultiImage(){

        return view('admin.about_page.multimage');


    }// End Method
    public function StoreGalleryMulti(Request $request){

        $image = $request->file('multi_image');

        foreach ($image as $multi_image) {

            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::insert([

                'multi_image' => $save_url,
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

    public function AllMultiImage(){

        $allMultiImage = MultiImage::all();
        return view('admin.about_page.all_multiimage',compact('allMultiImage'));

    }// End Method



}
