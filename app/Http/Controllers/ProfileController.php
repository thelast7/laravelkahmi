<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use Intervention\Image\Facades\Image;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $profile = User::where('id', $id)->first();
        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $profile = User::find($id);
        return view('profile.edit', compact('profile'));
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
      $profile = User::find($id);
      $data = $request->only(['jenis_kelamin', 'nik', 'no_hp', 'tanggal_lahir', 'alamat', 'kecamatan', 'kota', 'pekerjaan']);
        
        if ($request->hasFile('photo_diri')) 
        {
            $data['photo_diri'] = $this->photodiri($request->file('photo_diri'));
            if ($profile->photo_diri !== '') $this->deletephotodiri($profile->photo_diri);
           
        }

        if ($request->hasFile('photo_usaha')) 
        {
            $data['photo_usaha'] = $this->photousaha($request->file('photo_usaha'));
            if ($profile->photo_usaha !== '') $this->deletephotousaha($profile->photo_usaha);
           
        }

	//	dd($data);
        $profile->update($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Post '.$profile->title.' telah di Update.'
        ]);

        return redirect(route('profile.index'));
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

    public function photousaha(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['photo_usaha']['tmp_name']);
        $img->resize(1920, 1028);
        $path_dir = base_path() . '/public/img/photousaha/'.$filename;
        $success = $img->save($path_dir);
        return $filename;
    }

    public function photodiri(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['photo_diri']['tmp_name']);
        $img->resize(272, 203);
        $path_dir = base_path() . '/public/img/photodiri/'.$filename;
        $success = $img->save($path_dir);
        return $filename;
    }

    public function deletephotodiri($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'img/photodiri/'
            . DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }

     public function deletephotousaha($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'img/photousaha/'
            . DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }
}
