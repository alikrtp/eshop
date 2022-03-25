

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Message Edit Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Message</li>
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
                <h3 class="card-title">Edit Message</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form  name="category" action="{{route('admin_message_edit',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                  @csrf
                  <div class="card-body">

<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>Id</th> <td>{{$data->id}}</td></tr>
    <tr>
    <th>Name</th> <td>{{$data->name}}</td></tr>
    <tr>
    <th>Email</th> <td>{{$data->email}}</td></tr>
    <tr>
    <th>Phone</th> <td>{{$data->phone}}</td></tr>
    <tr>
    <th>Subject</th> <td>{{$data->subject}}</td> </tr>
    <tr>
    <th>Message</th> <td>{{$data->message}}</td>  </tr>
    <tr>
    <th>Admin Note</th> <td>{{$data->note}}</td></tr>
    <tr>
    <th>Status</th> <td><textarea  name="status"  placeholder="status">{{$data->status}} </textarea></td></tr>

  </thead>

  <tfoot>

  </tfoot>
</table>


</div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Message</button>
                </div>



              </form>
            </div>



      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

