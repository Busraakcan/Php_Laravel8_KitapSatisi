<?php

namespace App\Http\Controllers;

use http\Client\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
         return view("home.index");
         //echo " deneme";
    }

    public function aboutus()
    {
        return view("home.about");

    }


}
