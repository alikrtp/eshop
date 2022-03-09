<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
         $setting=Setting::first();
     return view('home.index',['setting'=>@setting]);
     }


}
