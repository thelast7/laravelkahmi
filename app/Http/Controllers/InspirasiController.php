<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftartip;

class InspirasiController extends Controller
{
    //
	protected $limit = 5;
	public function index()
	{
		$inspirasi = Daftartip::latest()->paginate($this->limit);
		return view('inspirasi.index', compact('inspirasi'));
	}

	public function inspirasikita($slug)
	{
		$inspirasikita = Daftartip::where('slug', $slug)->first();
		return view('inspirasi.inspirasikita', compact('inspirasikita'));
	}
}

