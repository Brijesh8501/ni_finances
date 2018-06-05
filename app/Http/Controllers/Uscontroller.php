<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uscontroller extends Controller
{
    //
    public function home_page()
    {
        return view('Us_front/index');
    }
    public function contact_page()
    {
        return view('Us_front/contact');
    }
    public function about_page()
    {
        return view('Us_front/about');
    }
    public function gallery_page()
{
    return view('Us_front/gallery');
}
    public function portfolio_page()
    {
        return view('Us_front/portfolio');
    }
    public function service_page()
    {
        return view('Us_front/service');
    }
    public function blog_page()
    {
        return view('Us_front/blog
        ');
    }

}
