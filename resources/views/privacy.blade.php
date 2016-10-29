@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--	<section id="mainbanner">
		<img src="{{asset('assets/images/banner.jpg')}}" class="img-responsive">
		<div class="banercontent container">
			<img src="{{asset('assets/images/home-banner-text.png')}}" class="bounceInRight wow hidden-sm hidden-xs" data-wow-delay="0.1s" data-wow-duration="3s">
			<span class="buttons bounceInUp wow" data-wow-delay="0.2s" data-wow-duration="3s">
                            <a href="#" class="btn btn-default" style="cursor: default">Express</a>
				<a href="#" class="btn btn-primary" style="cursor: default">Advanced</a>
				<a href="#" class="btn btn-danger" style="cursor: default"><i>Repair</i></a>
			</span>
		</div>
	</section>-->
	
	<!-- Call tool bar -->
	
	
        <section id="contactus" style="border:0.5px solid #000;">
		<div class="container">
			<div class="row text-center">
				<h2><?php $info= $data['pages_data'];
                                    echo $info->title;
                                ?></h2>
                            <div class="text-left">
                                     <?php echo $info->text;?>
                                </div>
			</div>
                </div>
	</section>
	
	
@endsection
