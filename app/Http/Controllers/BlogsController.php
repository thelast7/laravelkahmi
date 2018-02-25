<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class BlogsController extends Controller
{
    //
	protected $limit = 2;

	public function index()
	{
		$posts = Post::latest()->paginate($this->limit);
        return view('blogs.index', compact('posts'));
	}
		
}
