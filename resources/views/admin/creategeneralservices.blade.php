@extends('layouts.adminapp')
@section('content')
 <div class="row">
        <!-- left column -->
    
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New General Services</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/generalservices/save') }}">
                        {{ csrf_field() }}

              <div class="box-body">
                   <div class="col-md-6">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                       <div class="form-group">
                          <label for="title">Text</label>
                          <input type="text" class="form-control" name="text" id="title" placeholder="Text">
                        </div>
<!--                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif-->
<!--                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Image</h3>
                            </div>
                            <div class="box-body pad">
                                <input type="file" name="pic" />
                            </div>
                        </div>-->
        <!--                <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <input type="file" id="exampleInputFile">

                          <p class="help-block">Example block-level help text here.</p>
                        </div>-->
        <!--                <div class="checkbox">
                          <label>
                            <input type="checkbox"> Check me out
                          </label>
                        </div>-->
                   </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
 </div>
@stop()
@section('script')
<script>
    
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    
  });
</script>
@stop() 
