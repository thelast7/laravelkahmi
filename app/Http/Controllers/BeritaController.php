<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BeritaController extends Controller
{
    //
	protected $limit = 5;
	public function index()
	{
		$berita = Post::paginate($this->limit);
		return view('berita.index', compact('berita'));
	}

	public function isiberita($slug)
	{
		$isiberita = Post::where('slug', $slug)->first();
		return view('berita.isiberita', compact('isiberita'));
	}
}
