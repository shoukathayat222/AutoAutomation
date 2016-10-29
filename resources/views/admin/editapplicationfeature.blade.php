@extends('layouts.adminapp')
@section('content')
    <div class="row">
        <!-- left column -->
    
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Application Feature</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/applicationfeature/update') }}">
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
                          <label for="title">Text</label>
                          <input type="text" class="form-control" name="text" id="title" placeholder="Text" value="<?php echo $data->text;?>">
                        </div>
<!--                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Current Image</h3>
                            </div>
                            <div class="box-body pad">
                                <img src="{{ asset('service_images/<?php echo $data->image;?>') }}" />
                                {{asset('assets/service_images/<?php echo $data->image;?>')}}

                            </div>
                        </div>-->
<!--                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Image</h3>
                            </div>
                            <div class="box-body pad">
                                <input type="file" name="pic" />
                            </div>
                        </div>-->
<!--                       <div class="form-group">
                           <label for="title">Locked&nbsp;</label>
                            <label>
                                <input type="radio" name="locked" class="flat-red" value="yes" <?php echo $data->locked=='yes'?'checked':'';?>>&nbsp;Yes
                            </label>
                            <label>
                                <input type="radio" name="locked" class="flat-red" value="no" <?php echo $data->locked=='no'?'checked':'';?>>&nbsp;No
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
    //Flat red color scheme for iCheck
    $(function () {
         $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
        CKEDITOR.replace('editor1');
    });
</script>
@stop()