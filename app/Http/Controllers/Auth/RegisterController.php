<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use DB;
use Mail;
use Illuminate\Http\Request;

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
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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
            'photo_diri' => $data['photo_diri'],
            'photo_ktp' => $data['photo_ktp'],
            'harapan' => $data['harapan']
        ]);
		$user->role = 'member';
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
        return back()->with('Error', $validator->errors());
    }

    public function userActivation($token) {
        $check = DB::table('users_activations')->where('token', $token)->first();

        if (!is_null($check)) {
            $user = User::find($check->id_user);

            if ($user->is_activated == 1){
                return redirect()->to('login')->with('Success', "User are already actived");
            }
            $user->update(['is_activated' => 1]);
            DB::table('users_activations')->where('token', $token)->delete();

            return redirect()->to('login')->with('Success', "user active successfully");
        }
        return redirect()->to('login')->with('warning', "token anda salah");
    }
}
