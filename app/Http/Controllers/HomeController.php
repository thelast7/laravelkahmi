<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('about','welcome','contact','caramendaftar');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('layouts/about');
    }

    public function movie()
    {
        return view('layouts/movie');
    }

    public function berita()
    {
        return view('layouts/berita');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function forum()
    {
        return view('layouts/forum');
    }

    public function lupapassword()
    {
        return view('layouts/lupapassword');
    }

    public function termsandcondition()
    {
        return view('layouts/termsandcondition');
    }

    public function contact()
    {
        return view('layouts/contact');
    }

    public function caramendaftar()
    {
        return view('layouts/caramendaftar');
    }
}
