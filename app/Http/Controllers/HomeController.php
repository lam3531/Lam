<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function viewHome(){
        return view('guest/home');
    }
}
