<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customcontroler extends Controller
{
    function home($name,$id = null){
        return view('welcome')->with(compact('name', 'id'));
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
}
