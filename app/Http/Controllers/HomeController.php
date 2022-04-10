<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Message;
use App\Models\Category;

class HomeController extends Controller
{
    public static function categorylist( )
    {

       return Category::where('parentid','=',0)->with('children')->get();
    }


 public function index(){
       $setting=Setting::first();
       $slider=Product::select('title','image','price')->limit(3)->get();

     return view('home.index',['slider'=>$slider,'page'=>'home']);//,['setting'=>$setting]
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

    public function categoryproduct($id){

        $data=Product::where('category_id',$id)->get();

        return view('home.categoryproduct',['data',$data]);
        }



    public function sendmessage(Request $request){


        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');


        $data->save();

        return redirect()->route('contact');//->with('success','Mesajınız başarı ile kaydedilmiştir. teşekkür ederiz');

}




}//end homecontroller
