<?php
    $counter=1;
?>
@extends('layouts.adminapp')
@section('content')
<!--

<table>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Text</th>
        </th>Locked</th>
    </tr>
    {{$data}}
    @foreach($data as $user)
        
    <tr>
        <td>{{@$counter}}</td>
        <td>{{ $user->title }}</td>
        <td>{{ $user->text }}</td>
        <td>{{ $user->locked }}</td>
    </tr>
    @endforeach

</table>-->
<!--<div class="pull-left"><a href="/admin/createpage">Add New Page</a></div>-->
<h3>Manufactures Listings</h3>
<div class="clearfix"></div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Locked</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $user)    
                <tr>
                    <td>{{@$counter++}}</td>
                    <td>{{ $user->title }}</td>
                    <td> <img src="/assets/service_images/<?php echo $user->image;?>" height="75" width="100"/></td>
                    <td>{{ $user->locked }}</td>
                    <td><a href="{{url('admin/manufactures/edit/id')}}/{{ $user->id }}">Edit</a></td>
                </tr>
                @endforeach
                
                </tbody>
<!--                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Locked</th>
                    <th>Action</th>
                </tr>
                </tfoot>-->
              </table>
            </div>

@stop()
@section('script')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables/dataTables.bootstrap.css')}}">
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@stop()