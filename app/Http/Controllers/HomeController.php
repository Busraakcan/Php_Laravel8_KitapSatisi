<?php

namespace App\Http\Controllers;

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
    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        //return view('home.test',['id'=>$id,'name'=>$name]);

        /*
        echo " id Number : ", $id;
        echo " <br> Name : ", $name;
        for($i=1;$i<=$id;$i++)
        {
            echo "<br> $i - $name";
        }*/
    }
}
