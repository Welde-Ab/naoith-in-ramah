<?php

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class MembersController extends Controller
{
    //
    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:members,name',
            'member_image' => 'required',
        ],[
            'name.required'=>'Member name is required',
            'members_image.required' =>'Member image required'
        ]);
        $category_image = $request->file('members_image');

        $name_gen = hexdec(uniqid()).'.'.$members_image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($members_image)->resize(1020,519)->save('upload/categories/'.$name_gen);
        $save_url = 'upload/categories/'.$name_gen;

        Members::insert([
            'name' => $request->name,
            'description' => $request->description,
            'members_image' =>  $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Members Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.members.index_members')->with($notification);
    }

    public function index()
    {
        $members = Members::with('galleries')->get();

        return view('admin.members.index', compact('members'));

    }
    public function EditMembers($id){

        $members = Members::findOrFail($id);
        return view('admin.members.edit_members',compact('members'));
    }// End Method


    public function UpdateMembers(Request $request){

        $members_id = $request->id;

        if ($request->file('members_image')) {
            $image = $request->file('members_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(1020,519)->save('upload/members/'.$name_gen);
            $save_url = 'upload/members/'.$name_gen;

            Category::findOrFail($category_id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'category_image' =>  $save_url,
            ]);
            $notification = array(
                'message' => 'Members Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('members.index')->with($notification);

        } else{

            Members::findOrFail($members_id)->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => 'Member updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('members.index')->with($notification);
        } // end Else
    } // End Method
}
