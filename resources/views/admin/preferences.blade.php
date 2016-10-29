@extends('layouts.adminapp')
@section('content')
 <div class="row">
        <!-- left column -->
    
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Footer Info</h3>
              <?php
                $all_info=array();
                $logo='';
                $app_feature_logo='';
                $gen_services_logo='';
                $track_report__logo='';
                foreach($data as $row){ //echo $row->name." ".$row->value;
                    if($row->name !="logo" && $row->name!="gen_services_logo" && $row->name !="app_feature_logo" && $row->name!='track_report_logo')
                        $all_info[$row->name]=$row->value;
                    else if($row->name=="logo")
                        $logo=$row->value;
                    else if($row->name=='gen_services_logo')
                        $gen_services_logo=$row->value;
                    else if($row->name=='app_feature_logo')
                        $app_feature_logo=$row->value;
                    else if($row->name=='track_report_logo')
                        $track_report_logo=$row->value;
                }
              //echo $logo;die;
              
              //var_dump($data);die;              echo $data->logo;die;
              //print_r($data);die;
              ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/preferences/updatepreferences') }}">
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
                          <label for="Corporate_Office_Toll_Free">Corporate Office Toll Free</label>
                          <input type="text" class="form-control" name="all_info[Corporate_Office_Toll_Free]" id="Corporate_Office_Toll_Free" value="<?php echo $all_info['Corporate_Office_Toll_Free'];?>" placeholder="Corporate Office Toll Free">
                        </div>
                        <div class="form-group">
                          <label for="Local_Fax">Local Fax</label>
                          <input type="text" class="form-control" name="all_info[Local_Fax]" id="Local_Fax" placeholder="Local Fax" value="<?php echo $all_info['Local_Fax'];?>">
                        </div>
                        <div class="form-group">
                          <label for="Accounting">Accounting</label>
                          <input type="text" class="form-control" name="all_info[Accounting]" id="Accounting" value="<?php echo $all_info['Accounting'];?>" placeholder="Accounting">
                        </div>
                        <div class="form-group">
                          <label for="Customer Service">Customer Service</label>
                          <input type="text" class="form-control" name="all_info[Customer_Service]" id="Customer_Service" value="<?php echo $all_info['Customer_Service'];?>" placeholder="Customer Service">
                        </div>
                        <div class="form-group">
                          <label for="Sales">Sales</label>
                          <input type="text" class="form-control" name="all_info[Sales]" id="Sales" value="<?php echo $all_info['Sales'];?>" placeholder="Sales">
                        </div>
                        <div class="form-group">
                          <label for="Technical_Support">Technical Support</label>
                          <input type="text" class="form-control" name="all_info[Technical_Support]" id="Technical_Support" value="<?php echo $all_info['Technical_Support'];?>" placeholder="Technical Support">
                        </div>
                        <div class="form-group">
                          <label for="Corporate_Address">Corporate Address</label>
                          <input type="text" class="form-control" name="all_info[Corporate_Address]" id="Corporate_Address" value="<?php echo $all_info['Corporate_Address'];?>" placeholder="Corporate Address">
                        </div>
                        <div class="form-group">
                          <label for="Mailing address">Mailing address</label>
                          <input type="text" class="form-control" name="all_info[Mailing_address]" id="Mailing_address" value="<?php echo $all_info['Mailing_address'];?>" placeholder="Mailing address">
                        </div>
                        <div class="form-group">
                          <label for="Copyright">Copyright</label>
                          <input type="text" class="form-control" name="all_info[Copyright]" id="Copyright" value="<?php echo $all_info['Copyright'];?>" placeholder="© 2016 Auto Automation, Inc. All rights reserved">
                        </div>
                        <div class="form-group">
                          <label for="Copyright">Application Features Button Text</label>
                          <input type="text" class="form-control" name="all_info[application_feature_button_text]" id="Copyright" value="<?php echo $all_info['application_feature_button_text'];?>" placeholder="">
                        </div>
                        <?php if(isset($logo) && $logo!='') { // $logo=$data->logo;?>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Current Logo</h3>
                            </div>
                            <div class="box-body pad">
                                <img src="/assets/service_images/<?php echo $logo;?>" />
                            </div>
                        </div>
                        <?php } ?>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Logo</h3>
                            </div>
                            <div class="box-body pad">
                                <input type="file" name="logo" />
                            </div>
                        </div>
                        
                        
                        <?php if(isset($app_feature_logo) && $app_feature_logo!='') { // $logo=$data->logo;?>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Application Feature</h3>
                            </div>
                            <div class="box-body pad">
                                <img src="/assets/service_images/<?php echo $app_feature_logo;?>" />
                            </div>
                        </div>
                        <?php } ?>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Application Feature Image</h3>
                            </div>
                            <div class="box-body pad">
                                <input type="file" name="app_feature_logo" />
                            </div>
                        </div>
                        
                        
                        
                        <?php if(isset($gen_services_logo) && $gen_services_logo!='') { // $logo=$data->logo;?>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">General Service</h3>
                            </div>
                            <div class="box-body pad">
                                <img src="/assets/service_images/<?php echo $gen_services_logo;?>" />
                            </div>
                        </div>
                        <?php } ?>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">General Service Image</h3>
                            </div>
                            <div class="box-body pad">
                                <input type="file" name="gen_services_logo" />
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                          <label for="Copyright">Track And Report Heading</label>
                          <input type="text" class="form-control" name="all_info[track_report_heading]" id="track_report_heading" value="<?php echo $all_info['track_report_heading'];?>" placeholder="Track And Report">
                        </div>
                        
<!--                        <div class="form-group">
                          <label for="Copyright">Track And Report Description</label>
                          <input type="text" class="form-control" name="all_info[track_report_description]" id="track_report_description" value="<?php echo $all_info['track_report_description'];?>" placeholder="">
                        </div>-->
                        
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Track And Report Description
                                  <small></small>
                                </h3>
                            </div>
                            <div class="box-body pad">
                                <textarea id="editor1" name="all_info[track_report_description]" rows="10" cols="80"><?php echo $all_info['track_report_description'];?></textarea>
                            </div>
                       </div>
                        
                        <?php if(isset($track_report_logo) && $track_report_logo!='') { // $logo=$data->logo;?>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Track And Report</h3>
                            </div>
                            <div class="box-body pad">
                                <img src="/assets/service_images/<?php echo $track_report_logo;?>" />
                            </div>
                        </div>
                        <?php } ?>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Track And Report Image</h3>
                            </div>
                            <div class="box-body pad">
                                <input type="file" name="track_report_logo" />
                            </div>
                        </div>
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">3 Types of Services
                                  <small></small>
                                </h3>
                            </div>
                            <div class="box-body pad">
                                <textarea id="editor2" name="all_info[types_of_services]" rows="10" cols="80"><?php echo $all_info['types_of_services'];?></textarea>
                            </div>
                       </div>

                        


<!--                        <div class="form-group">
                          <label for="Corporate_Office_Toll_Free">Corporate Office Toll Free</label>
                          <input type="text" class="form-control" name="Corporate_Office_Toll_Free" id="Corporate_Office_Toll_Free" placeholder="Corporate Office Toll Free">
                        </div>-->
                        
<!--                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif-->
<!--                       <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">Page Content
                                  <small></small>
                                </h3>
                                 tools box 
                                <div class="pull-right box-tools">
                                  <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                                </div>
                                 /. tools 
                            </div>
                            <div class="box-body pad">
                                <textarea id="editor1" name="text" rows="10" cols="80">This is my textarea to be replaced with CKEditor.</textarea>
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
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor    
  });
</script>
@stop() 