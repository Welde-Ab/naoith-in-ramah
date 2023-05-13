<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('front_end.index');
    }

    public function about()
    {
        return view('front_end.about_menu.about');
    }

    public function believe()
    {
        return view('front_end.about_menu.believe');
    }

    public function members()
    {
        return view('front_end.about_menu.members');
    }

    public function testimonies()
    {
        return view('front_end.about_menu.testimonies');
    }

    public function gallery()
    {
        return view('front_end.gallery');
    }

    public function gallery_categories()
    {
        return view('front_end.gallery_categories');
    }


    public function worships()
    {
        return view('front_end.worships');
    }

    public function articles()
    {
        return view('front_end.resources_menu.teachings.articles');
    }

    public function others()
    {
        return view('front_end.resources_menu.teachings.others');
    }

    public function series()
    {
        return view('front_end.resources_menu.teachings.series');
    }

    public function sermons()
    {
        return view('front_end.resources_menu.teachings.sermons');
    }

    public function shorts()
    {
        return view('front_end.resources_menu.teachings.shorts');
    }

    public function events()
    {
        return view('front_end.resources_menu.events');
    }

    public function prayers()
    {
        return view('front_end.resources_menu.prayers');
    }

    public function contact()
    {
        return view('front_end.contact');
    }

}
