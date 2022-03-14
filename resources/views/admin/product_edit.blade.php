@extends('layouts.admin')


@section('title','Product Edit Page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Edit Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">




         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form  name="category" action="{{route('admin_product_store',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                  @csrf
                <div class="card-body">





                  <div class="form-group">


                    <label >Category</label>
                    <select name="category_id" class="form-control select2" style="witdh:100%;">

                    @foreach($datalist as $rs)
                    <option value="{{$rs->id}}" @if ($rs->id==$data->category_id) selected="selected" @endif>
                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                    @endforeach

                    </select>

                  </div>

                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" value="{{$data->title}}" name="title"  placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label >keyword</label>
                    <input type="text" class="form-control" value="{{$data->keyword}}" name="keywords"  placeholder="keyword">
                  </div>

                  <div class="form-group">
                    <label >description</label>
                    <input type="text" class="form-control" value="{{$data->description}}" name="description"  placeholder="description">
                  </div>

                  <div class="form-group">
                    <label >price</label>
                    <input type="number" class="form-control"  name="price" value="{{$data->price}}" placeholder="price">
                  </div>
                  <div class="form-group">
                    <label >quantity</label>
                    <input type="number" class="form-control"  name="quantity" value="{{$data->quantity}}" placeholder="quantity">
                  </div>
                  <div class="form-group">
                    <label >minquantity</label>
                    <input type="text" class="form-control" name="minquantity" value="{{$data->minquantity}}"  placeholder="minquantity">
                  </div>
                  <div class="form-group">
                    <label >tax</label>
                    <input type="text" class="form-control" name="tax" value="{{$data->tax}}" placeholder="tax">
                  </div>
                  <div class="form-group">
                    <label >detail</label>
                    <input type="text" class="form-control" value="{{$data->detail}}" name="detail"  placeholder="detail">
                  </div>
                  <div class="form-group">
                    <label >image</label>
                    <input type="file" class="form-control" name="image"  placeholder="image">

                        @if ($rs->image)
                       <img src="{{Storage::url( $rs->image)}}" height="30" alt="">
                       @endif
                  </div>



                  <div class="form-group">
                    <label >slug</label>
                    <input type="text" class="form-control" value="{{$data->slug}}" name="slug"  placeholder="slug">
                  </div>

                    <div class="form-group">
                    <label >status</label>
                    <select name="status" class="form-control select2" value="{{$data->status}}" style="witdh:100%;">
                    <option selected="selected"> Aktif</option>
                    <option>Pasif</option>
                    </select>

                  </div>



                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Product</button>
                </div>



              </form>
            </div>



      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

