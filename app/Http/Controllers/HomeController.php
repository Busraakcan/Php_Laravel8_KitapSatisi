<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
         $setting= Setting::first();
         return view("home.index", ['setting'=>$setting]);

    }

    public function aboutus()
    {
        return view("home.about");

    }
    public function referances()
    {
        return view("home.about");

    }
    public function fag()
    {
        return view("home.about");

    }
    public function contact ()
    {
        return view("home.about");

    }
}
