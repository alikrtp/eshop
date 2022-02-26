<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$datalist=DB::select('select * from categories');
        $datalist= DB::table('categories')->get();



     return view('admin.category',['datalist'=>$datalist]);
    }

    /**
     * insert
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       // return "deneme bir iki.....";
       echo $name=$request->input('title');
       DB::table('categories')->insert([
           'parentid'=>$request->input('parentid'),
           'title'=>$request->input('title'),
           'keyword'=>$request->input('keyword'),
           'description'=>$request->input('description'),
           'slug'=>$request->input('slug'),
           'status'=>$request->input('status')
       ] );
       return redirect()->route('admin_category');

    }

    public function add()
    {
        //return "add";
        $datalist= DB::table('categories')->get()->where('parentid', 0);
        return view('admin.category_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {

           $data=Category::find($id);
           $datalist=DB::table('categories')->get()->where('parentid',0);
           return view('admin.category_edit',['data'=>$data,'datalist'=>$datalist]);

    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')->where('id','=', $id)->delete();
        return redirect()->route('admin_category');
    }
}
