<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FrontController extends Controller
{

    public function home()
    {
        return view('home');
    }


    public function services()
    {
        return view('services');
    }


    public function about()
    {
        return view('about');
    }


    public function contact()
    {
        return view('contact');
    }


    public function faq()
    {
        return view('faq');
    }


    public function signUp()
    {
        return view('signUp');
    }

}
