<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function homepage(){
        return view('welcome');
    }
    public function aboutUs(){
    return view('about');
    }



    

}

