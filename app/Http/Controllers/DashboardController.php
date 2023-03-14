<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        //$function = User::All();
        return view ('dashboard');
        //return view('dashboard', 'function', $function);
    }
}
