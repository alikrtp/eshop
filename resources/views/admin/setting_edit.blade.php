@extends('layouts.admin')


@section('title','Product Edit Page')
@section('js')


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Settings Edit Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Setting</li>
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
                <h3 class="card-title">Edit Setting</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form  name="setting" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data" >
                  @csrf
                <div class="card-body">

                <input type="hidden" class="form-control" value="{{$data->id}}" name="id"  placeholder="id">
                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" value="{{$data->title}}" name="title"  placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label >keyword</label>
                    <input type="text" class="form-control" value="{{$data->keyword}}" name="keyword"  placeholder="keyword">
                  </div>

                  <div class="form-group">
                    <label >description</label>
                    <input type="text" class="form-control" value="{{$data->description}}" name="description"  placeholder="description">
                  </div>

                  <div class="form-group">
                    <label >Company</label>
                    <input type="text" class="form-control"  name="company" value="{{$data->company}}" placeholder="company">
                  </div>
                  <div class="form-group">
                    <label >Adress</label>
                    <input type="text" class="form-control"  name="adress" value="{{$data->adress}}" placeholder="adress">
                  </div>
                  <div class="form-group">
                    <label >Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$data->phone}}"  placeholder="phone">
                  </div>
                  <div class="form-group">
                    <label >Fax</label>
                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}" placeholder="fax">
                  </div>
                  <div class="form-group">
                    <label >email</label>
                    <input type="text" class="form-control" value="{{$data->email}}" name="email"  placeholder="email">
                  </div>

                  <div class="form-group">
                    <label >smtpserver</label>
                    <input type="text" class="form-control"  name="smtpserver" value="{{$data->smtpserver}}" placeholder="smtpserver">
                  </div>
                  <div class="form-group">
                    <label >smtpemail</label>
                    <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}"  placeholder="smtpemail">
                  </div>
                  <div class="form-group">
                    <label >smtppassword</label>
                    <input type="text" class="form-control" name="smtppassword" value="{{$data->smtppassword}}" placeholder="smtppassword">
                  </div>
                  <div class="form-group">
                    <label >smtpport</label>
                    <input type="number" class="form-control" value="{{$data->smtpport}}" name="smtpport"  placeholder="smtpport">
                  </div>

                  <div class="form-group">
                    <label >Facebook</label>
                    <input type="text" class="form-control"  name="facebook" value="{{$data->facebook}}" placeholder="facebook">
                  </div>
                  <div class="form-group">
                    <label >Instagram</label>
                    <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}"  placeholder="instagram">
                  </div>
                  <div class="form-group">
                    <label >Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="twitter">
                  </div>
                  <div class="form-group">
                    <label >Youtube</label>
                    <input type="text" class="form-control" value="{{$data->youtube}}" name="youtube"  placeholder="youtube">
                  </div>

                   <div class="form-group">
                    <label >About Us</label>
                    <textarea  id="aboutus" name="aboutus"  placeholder="aboutus">{{$data->aboutus}} </textarea>
                    <script>

$(document).ready(function() {
$('#aboutus').summernote();
});

</script>
                </div>

                <div class="form-group">
                    <label >Contact</label>
                    <textarea  id="contact" name="contact"  placeholder="contact">{{$data->contact}} </textarea>

                    <script>
                        $(document).ready(function(){
                           $('#contact').summernote();
                        });
                    </script>
                </div>

                <div class="form-group">
                    <label >References</label>
                    <textarea  id="references" name="references"  placeholder="references">{{$data->references}} </textarea>

                    <script>
                        $(document).ready(function(){
                            $('#references').summernote();
                        });
                    </script>
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

