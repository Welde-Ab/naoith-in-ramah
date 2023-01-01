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
        return view('front_end.about');
    }

    public function gallery()
    {
        return view('front_end.gallery');
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
        return view('front_end.resources_menu.teachings.short');
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
