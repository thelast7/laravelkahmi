<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Session;
use DB;
use App\Post;
use App\User;

use Intervention\Image\Facades\Image;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
		$posts = Post::latest()->paginate($this->limit);
        return view('backend.posts.index', compact('posts'));
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
        $data = $request->only(['author_id', 'title', 'slug', 'body',  'category_id']);
		
        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        $posts = Post::create($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Post '.$posts->title.' telah di Tambah.'
        ]);

        return redirect(route ('posts.index'));
		
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
        $post = Post::find($id);

       return view('backend.posts.edit', compact('post'));
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
      $posts = Post::find($id);
      $data = $request->only(['title', 'body', 'author_id', 'category_id', 'slug', 'image']);
        
        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
            if ($posts->image !== '') $this->deleteImage($posts->image);
           
        }

        $posts->update($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Post '.$posts->title.' telah di Update.'
        ]);

        return redirect(route ('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $data['image'] = $this->deleteImage($post->image);
        $post->delete();

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i>  !</h4> Post '.$post->title.' telah di hapus.'
        ]);
        return redirect('route'('posts.index'));
    }

    // public function handleRequest($request)
    // {
        // $data = $request->all();

        // if ($request->hasFile('image')) {

        //     $width     = config('cms.image.thumbnail.width');
        //     $height    = config('cms.image.thumbnail.height');
        //     $image     = $request->file('image');
        //     $extension = $image->guessClientExtension();
        //     $fileName  = str_random(40) . '.' . $extension;
        //     $destination = base_path() . '/public/img/post/';

        //     $successUpload = Image::make($image->getRealPath())
        //         ->resize(1920, 920)->save($destination . "/" . $fileName);

        //     if ($successUpload)
        //     {
        //         $thumbnail = "thumb_". $fileName;
        //         Image::make($image->getRealPath())
        //             ->resize($width,$height)
        //             ->save($destination . "/" . $thumbnail);
        //     }

        //     $data['image'] = $fileName;
        // }
    public function saveImage(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(1920, 920);
        $path_dir = base_path() . '/public/img/post/'.$filename;
        $success = $img->save($path_dir);

        if ($success) 
        {
           	$img = Image::make($_FILES['image']['tmp_name']);
        	$img->resize(272, 203);
           	$thumbnail = base_path() . '/public/img/post/tumb_'.$filename;
           	$img->save($thumbnail);
        }
        return $filename;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'img/post/'
            . DIRECTORY_SEPARATOR . $filename;
        $thumbnail = base_path() . '/public/img/post/tumb_'.$filename;

        return File::delete($path, $thumbnail);
    }
}
