<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends BackendController
{
    //
	public function index()
	{
		return view('backend.index');
	}	
}
