<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;

class ProfilController extends Controller
{
    //
	public function index()
	{
		return view('profil.index');
	}

	public function edit($id)
    {
        $profil = User::find($id);

       return view('profil.edit', compact('profil'));
    }
}
