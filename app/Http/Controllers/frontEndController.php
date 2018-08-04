<?php

namespace App\Http\Controllers;

use App\ResumeUser;
use Illuminate\Http\Request;
use Session;

class frontEndController extends Controller
{
    public function home(){
        return view('front-end.home');
    }
    public function SignIn(){
        return view('front-end.login.login');
    }

}
