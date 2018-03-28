<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use DB;
use Mail;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'          => 'required|max:255',
            'username'      => 'required|min:4',
            'nik'           => 'required|numeric|min:5',
            'no_hp'         => 'required|numeric|min:9',
            'kota'          => 'required',
            'pekerjaan'     => 'required',
            'email'         => 'required|email|max:255|unique:users',
            'password'      => 'required|min:6|confirmed',
            'tanggal_lahir' => 'required|date|min:8',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required|max:255',
            'harapan'       => 'required|max:255',
            'photo_diri'    => 'required|image|mimes:jpg,png,jpeg|max:10240',
            'photo_ktp'     => 'required|image|mimes:jpg,png,jpeg|max:10240',
            'photo_usaha'   => 'mimes:jpg,png,jpeg|max:10240'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       
        if (! empty($data['photo_usaha']) ) {
            $data['photo_usaha'] = $this->photousaha($data['photo_usaha']);
        }

        // untuk merapikan samadengan tekan ctrl+alt+a
        
        $data['photo_diri']    = $this->photodiri($data['photo_diri']);
        $data['photo_ktp']     = $this->photoktp($data['photo_ktp']);
        $data['password']      = bcrypt($data['password']);
        $data['tanggal_lahir'] = date("Y-m-d",strtotime($data['tanggal_lahir']));
       
        $user = User::create($data);

        /*
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'jenis_kelamin' => $data['jenis_kelamin'],
            'nik' => $data['nik'],
            'no_hp' => $data['no_hp'],
            'tanggal_lahir' => date("Y-m-d",strtotime($data['tanggal_lahir'])),
            'alamat' => $data['alamat'],
            'kota' => $data['kota'],
            'pekerjaan' => $data['pekerjaan'],
            'photo_diri' => $photo_diri,
            'photo_ktp' => $photo_ktp,
            'photo_usaha' => $photo_usaha,
            'harapan' => $data['harapan'],
            'role' => 'member'
        ]);
        */
        $user->save();
        return $user;
    }

    public function register(Request $request) {
        $input = $request->all();
        $validator = $this->validator($input);

        if ($validator->passes()){
            $user = $this->create($input)->toArray();
            $user['link'] = str_random(30);

            DB::table('users_activations')->insert(['id_user' => $user['id'], 'token' => $user['link']]);
            Mail::send('mail.activation', $user, function($message) use ($user) {
                $message->to($user['email']);
                $message->subject('kahmipreneur.com - Activation Code');
            });
            return redirect()->to('login')->with('message', "Kode aktivasi telah dikirim, silahkan cek email anda");

        }
        return back()->with('errors', $validator->errors());
    }

    public function userActivation($token) {
        $check = DB::table('users_activations')->where('token', $token)->first();

        if (!is_null($check)) {
            $user = User::find($check->id_user);

            if ($user->is_activated == 1){
                return redirect()->to('login')->with('message', "User are already actived");
            }
            $user->update(['is_activated' => 1]);
            DB::table('users_activations')->where('token', $token)->delete();

            return redirect()->to('login')->with('message', "user active successfully");
        }
        return redirect()->to('login')->with('message', "token anda salah");
    }
    
    public function photoktp(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['photo_ktp']['tmp_name']);
        $img->resize(1920, 1028);
        $path_dir = public_path() . '/img/photoktp/'.$filename;
        $success = $img->save($path_dir);
        return $filename;
    }
    
    public function photodiri(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['photo_diri']['tmp_name']);
        $img->resize(272, 203);
        $path_dir = public_path() . '/img/photodiri/'.$filename;
        $success = $img->save($path_dir);
        return $filename;
    }

    public function photousaha(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['photo_usaha']['tmp_name']);
        $img->resize(1920, 1028);
        $path_dir = public_path() . '/img/photousaha/'.$filename;
        $success = $img->save($path_dir);
        return $filename;
    }

}
