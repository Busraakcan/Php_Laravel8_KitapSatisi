<?php

namespace App\Http\Controllers;

use App\Models\Category;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
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
