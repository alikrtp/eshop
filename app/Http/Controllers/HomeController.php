<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){
     return view('home.index');
     }

public function test($id,$name){
    return view('home.index',['id'=>$id,'name'=>$name]);
   // echo 'id number',$id,'<br>';
    //echo 'id number',$name;
     }
     public function about(){
        return view('home.about');
        }

}
