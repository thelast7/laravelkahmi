<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
use App\Post;
use File;
use Intervention\Image\Facades\Image;

class PostsController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = config('cms.image.directory');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view('backend.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$data = $this->handleRequest($request);
		$newPost = $request->user()->posts()->create($data);

		Session::flash('flash_notification', [
			'level'   => 'success',
			'message' => '<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Post '.$newPost->title.' telah di Tambah.'
		]);

    	return redirect(route('blog.index'));
		
    }

    protected function handleRequest($request)
    {
      	$data = $request->all();

		if ($request->hasFile('image')) {

			$width     = config('cms.image.thumbnail.width');
			$height    = config('cms.image.thumbnail.height');
			$image     = $request->file('image');
			$extension = $image->guessClientExtension();
			$fileName  = str_random(40) . '.' . $extension;
			$destination = $this->uploadPath;

			$successUpload = Image::make($image->getRealPath())
				->resize(1920, 920)->save($destination . "/" . $fileName);

			if ($successUpload)
			{
				$thumbnail = "thumb_". $fileName;
				Image::make($image->getRealPath())
					->resize($width,$height)
					->save($destination . "/" . $thumbnail);
			}

			$data['image'] = $fileName;
		}

		return $data;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
