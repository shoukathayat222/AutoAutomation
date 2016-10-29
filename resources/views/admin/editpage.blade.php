@extends('layouts.adminapp')
@section('content')
    <div class="row">
        <!-- left column -->
    
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New Page</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('/admin/updatepage') }}">
                <input type="hidden" name="id" value="<?php echo $data->id;?>" />
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
                          <label for="title">Title</label>
                          <input type="title" class="form-control" name="title" id="title" placeholder="Page Title" value="<?php echo $data->title;?>">
                        </div>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Page Content</h3>
                            </div>
                            <div class="box-body pad">
                                <textarea id="editor1" name="text" rows="10" cols="80"><?php echo $data->text;?></textarea>
                            </div>
                        </div>
                       <div class="form-group">
                           <label for="title">Locked&nbsp;</label>
                            <label>
                                <input type="radio" name="locked" class="flat-red" value="yes" <?php echo $data->locked=='yes'?'checked':'';?>>&nbsp;Yes
                            </label>
                            <label>
                                <input type="radio" name="locked" class="flat-red" value="no" <?php echo $data->locked=='no'?'checked':'';?>>&nbsp;No
                            </label>
                        </div>
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
    //Flat red color scheme for iCheck
    $(function () {
        
    //iCheck for checkbox and radio inputs
//    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
//      checkboxClass: 'icheckbox_minimal-blue',
//      radioClass: 'iradio_minimal-blue'
//    });
//        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
//          checkboxClass: 'icheckbox_flat-green',
//          radioClass: 'iradio_flat-green'
//        });
        //Red color scheme for iCheck
//    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
//      checkboxClass: 'icheckbox_minimal-red',
//      radioClass: 'iradio_minimal-red'
//    });
    //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
        CKEDITOR.replace('editor1');
    });
</script>
@stop()