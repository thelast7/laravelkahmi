<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BeritaController extends Controller
{
    //
	public function index()
	{
		$berita = Post::paginate(3);
		return view('berita.index', compact('berita'));
	}

	public function isiberita($slug)
	{
		$isiberita = Post::where('slug', $slug)->first();
		return view('berita.isiberita', compact('isiberita'));
	}
}
