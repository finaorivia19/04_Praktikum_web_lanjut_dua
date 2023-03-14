<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($name = 0){
        if ($name != 'Bima' && $name != 'Fina'){
            return view('profil');
        }else if($name == 'Bima'){

            return view('profilBima', ['users'=> User::getByName($name)]);
        }else{
            return view('profilFina', ['users'=> User::getByName($name)]);
        }
    }
    }

