<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Daftartip;
use App\User;

use Intervention\Image\Facades\Image;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DaftartipController extends Controller
{
    // protected $uploadPath;

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->uploadPath = config('cms.image.directory');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftartip = Daftartip::all();
        // $daftartip = Daftartip::latest()->paginate($this->limit);
        return view('backend.daftartip.index', compact('daftartip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.daftartip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title', 'slug', 'body', 'tip_id']);
        
        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        $daftartip = Daftartip::create($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> TIPS '.$daftartip->title.' telah di Tambah.'
        ]);

        return redirect(route ('daftartip.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Daftartip  $daftartip
     * @return \Illuminate\Http\Response
     */
    public function show(Daftartip $daftartip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Daftartip  $daftartip
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftartip = Daftartip::find($id);
        return view('backend.daftartip.edit', compact('daftartip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Daftartip  $daftartip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $daftartip = Daftartip::find($id);
        $data = $request->only(['title', 'slug', 'body', 'tip_id']);
        
        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
            if ($daftartip->image !== '') $this->deleteImage($daftartip->image);
           
        }

        $daftartip->update($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> TIPS '.$daftartip->title.' telah di Update.'
        ]);

        return redirect(route ('daftartip.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Daftartip  $daftartip
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftartip = Daftartip::find($id);
        $data['image'] = $this->deleteImage($daftartip->image);
        $daftartip->delete();

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i>  !</h4> TIPS '.$daftartip->title.' telah di hapus.'
        ]);
        return redirect('route'('daftartip.index'));
    }

    public function saveImage(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(1920, 920);
        $path_dir = base_path() . '/public/img/tipz/'.$filename;
        $success = $img->save($path_dir);

        if ($success) 
        {
            $img = Image::make($_FILES['image']['tmp_name']);
            $img->resize(272, 203);
            $thumbnail = base_path() . '/public/img/tipz/tumb_'.$filename;
            $img->save($thumbnail);
        }
        return $filename;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'img/tipz/'
            . DIRECTORY_SEPARATOR . $filename;
        $thumbnail = base_path() . '/public/img/tipz/tumb_'.$filename;

        return File::delete($path, $thumbnail);
    }
}
