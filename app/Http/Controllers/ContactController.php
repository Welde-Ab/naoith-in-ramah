<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class ContactController extends Controller
{
    //
//    public function Contact(){
//        return view('front_end.contact');
//    } // end mehtod


    public function StoreMessage(Request $request){

        Contact::insert([

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Your Message Submited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    } // end mehtod


    public function ContactMessage(){

        $contacts = Contact::latest()->get();
        return view('admin.contact.allcontact',compact('contacts'));

    } // end mehtod


    public function DeleteMessage($id){

        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Your Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end mehtod
}
