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

    public function caramendaftar()
    {
        return view('daftar.index');
    }

    public function termsandcondition()
    {
        return view('terms.index');
    }

    public function lupapassword()
    {
        return view('layouts/lupapassword');
    }
}
