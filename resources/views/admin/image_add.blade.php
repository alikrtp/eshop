@extends('layouts.admin')


@section('title','Image ADD Page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>product: {{$data->title}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Image Add</li>
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
                <h3 class="card-title">Add Image</h3>
              </div>


                <?php // echo $data->id ?>
                <p></p>

              <!-- /.card-header -->

              <!-- form start-->


              <form name="image"  action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="POST" enctype="multipart/form-data">

                  @csrf
                <div class="card-body">

                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title"  placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label >image</label>
                    <input type="file" class="form-control" name="image"  placeholder="image">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Image</button>
                </div>


                <div class="card-body">

<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>Id</th>
    <th>product</th>
    <th>Title</th>
    <th>Galery</th>

    <th style="..." colspan="2">Actions</th>

  </tr>
  </thead>
  <tbody>
                  @foreach ($image as $rs)
                  <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->product_id}}</td>
                    <td>{{$rs->title}}</td>


                    <td>
                        @if ($rs->image)
                       <img src="{{Storage::url( $rs->image)}}" height="30" alt="">
                       @endif
                    </td>

                    <td><a href="{{route('admin_image_delete',['id'=>$rs->id,'product_id'=>$rs->product_id])}}" onclick="return confirm('Delete!Are You Sure')"><ion-icon name="trash-outline"></ion-icon>Delete</a></td>
                  </tr>
                  @endforeach
                  </tbody>

  <tfoot>

  </tfoot>
</table>


</div>




              </form>
            </div>



      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

