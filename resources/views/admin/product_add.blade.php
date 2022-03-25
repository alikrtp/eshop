@extends('layouts.admin')


@section('title','Product ADD Page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-10">
          <div class="col-sm-6">
            <h1>Product Add Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form  name="category" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">





                  <div class="form-group">


                    <label >Category</label>
                    <select name="category_id" class="form-control select2" style="witdh:100%;">

                    @foreach($datalist as $rs)
                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                    @endforeach

                    </select>

                  </div>

                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title"  placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label >keyword</label>
                    <input type="text" class="form-control" name="keywords"  placeholder="keyword">
                  </div>

                  <div class="form-group">
                    <label >description</label>
                    <input type="text" class="form-control" name="description"  placeholder="description">
                  </div>

                  <div class="form-group">
                    <label >price</label>
                    <input type="number" class="form-control" name="price" value="0" placeholder="price">
                  </div>
                  <div class="form-group">
                    <label >quantity</label>
                    <input type="number" class="form-control" name="quantity" value="1" placeholder="quantity">
                  </div>
                  <div class="form-group">
                    <label >minquantity</label>
                    <input type="text" class="form-control" name="minquantity" value="1"  placeholder="minquantity">
                  </div>
                  <div class="form-group">
                    <label >tax</label>
                    <input type="number" class="form-control" name="tax" value="18" placeholder="tax">
                  </div>
                  <div class="form-group">
                    <label >detail</label>
                    <input type="text" class="form-control" name="detail"  placeholder="detail">
                  </div>
                  <div class="form-group">
                    <label >slug</label>
                    <input type="text" class="form-control" name="slug"  placeholder="slug">
                  </div>

                  <div class="form-group">
                    <label >image</label>
                    <input type="file" class="form-control" name="image"  placeholder="image">
                  </div>

                    <div class="form-group">
                    <label >status</label>
                    <select name="status" class="form-control select2" style="witdh:100%;">
                    <option selected="selected"> Aktif</option>
                    <option>Pasif</option>
                    </select>

                  </div>



                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Product</button>
                </div>



              </form>
            </div>



      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

