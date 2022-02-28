<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$datalist= DB::table('products')->get();
        $datalist= Product::all();


        return view('admin.product',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist= DB::table('categories')->get()->where('parentid','>',0);
        return view('admin.product_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*echo $name=$request->input('title');
        DB::table('products')->insert([

            'title'=>$request->input('title'),
            'keyword'=>$request->input('keyword'),
            'category_id'=>$request->input('category_id'),

            'price'=>$request->input('price'),
            'quantity'=>$request->input('quantity'),
            'minquantity'=>$request->input('minquantity'),
            'tax'=>$request->input('tax'),
            'detail'=>$request->input('detail'),
            'slug'=>$request->input('slug'),
            'status'=>$request->input('status')
        ] );*/
        $data = new Product;

        $data->title = $request->input('title');
        $data->keyword = $request->input('keyword');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status= $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->quantity= $request->input('quantity');
        $data->minquantity= $request->input('minquantity');
        $data->tax= $request->input('tax');
        $data->detail = $request->input('detail');

        $data->save();

        return redirect()->route('admin_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,Category $category,$id)
    {
        $data=Product::find($id);
        $datalist=Category::all()->where('parentid','>',0);
        return view('admin.product_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $data=Product::find($id);

        $data->title = $request->input('title');
        $data->keyword = $request->input('keyword');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status= $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->quantity= $request->input('quantity');
        $data->minquantity= $request->input('minquantity');
        $data->tax= $request->input('tax');
        $data->detail = $request->input('detail');

        $data->save();

        return redirect()->route('admin_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->route('admin_product');

    }
}
