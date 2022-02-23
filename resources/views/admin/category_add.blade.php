@extends('layouts.admin')


@section('title','Blank Page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
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
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form  name="category" action="{{route('admin_category_create')}}" method="post" >
                  @csrf
                <div class="card-body">





                  <div class="form-group">


                    <label >Parent id</label>
                    <select name="parentid" class="form-control select2" style="witdh:100%;">
                    <option value="0 " selected="selected"> Ana Kategori</option>
                    @foreach($datalist as $rs)
                    <option value="{{$rs->id}}">{{$rs->title}}</option>
                    @endforeach

                    </select>

                  </div>

                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label >keyword</label>
                    <input type="text" class="form-control" name="keywords" id="exampleInputPassword1" placeholder="keyword">
                  </div>

                  <div class="form-group">
                    <label >description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="description">
                  </div>
                  <div class="form-group">
                    <label >slug</label>
                    <input type="text" class="form-control" name="slug" id="exampleInputPassword1" placeholder="slug">
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
                  <button type="submit" class="btn btn-primary">Kategori Ekle</button>
                </div>



              </form>
            </div>



      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

