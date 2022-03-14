<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;

class HomeController extends Controller
{
 public function index(){
       $setting=Setting::first();
     return view('home.index',['page'=>'home']);//,['setting'=>$setting]
     }

     public static function getsetting(){

      return  Setting::first();
      }



public function login(){
        return view('admin.login');
    }

public function logout(Request $request){
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/home');
    }


    public function logincheck(Request $request)
    {
    if ($request->isMethod('post')){

        //$credentials = $request->only([
          //  'email' ,'password'

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    else {
        return view('admin.login');
    }
    }



public function test($id,$name){
    return view('home.index',['id'=>$id,'name'=>$name]);
   // echo 'id number',$id,'<br>';
    //echo 'id number',$name;
     }

public function about(){

        return view('home.about');
}
public function references(){

    return view('home.references');
}
public function contact(){

    return view('home.contact');
}

}
