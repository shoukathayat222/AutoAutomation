@extends('layouts.app')

@section('content')
<style>
    .tooltip-inner {
        max-width: 500px !important;
        background-color: #000;
        color:#FFF;
        border:1px solid #f00;
    }
    

    /* Important part */
    .modal-dialog{
        overflow-y: initial !important
    }
    .modal-body{
        height: 250px;
        overflow-y: auto;
    }

</style>
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

<!-- Main Banner -->
	<section id="mainbanner">
		<img src="{{asset('assets/images/banner.jpg')}}" class="img-responsive">
		<div class="banercontent container">
			<img src="{{asset('assets/images/home-banner-text.png')}}" class="bounceInRight wow hidden-sm hidden-xs" data-wow-delay="0.1s" data-wow-duration="3s">
			<span class="buttons bounceInUp wow" data-wow-delay="0.2s" data-wow-duration="3s">
                            <a href="#" class="btn btn-default" style="cursor: default">Express</a>
				<a href="#" class="btn btn-primary" style="cursor: default">Advanced</a>
				<a href="#" class="btn btn-danger" style="cursor: default"><i>Repair</i></a>
			</span>
		</div>
	</section>
	
	<!-- Call tool bar -->
	<section id="calltoolbar">
		<div class="container">
			<div class="row">
				<span>Call our toll free Number : </span> <strong><?php echo $data['Corporate_Office_Toll_Free'];?></strong>
			</div>
		</div>
	</section>
	
	<!-- Our services -->
	<section id="ourservice">
		<div class="container">
			<div class="row">
				<h2>Our <span>Services</span></h2>
			</div>
			<div class="row">
                                <?php $counter=3;foreach($data['services'] as $key=>$value){ ?>
				<div class="col-md-3 col-sm-3 zoomIn wow" data-wow-delay="0" data-wow-duration="1s">
                                    <div class="bluecircle"><a href="#" id="modal<?php echo $counter;?>" data-toggle="modal" data-target="#myModal<?php echo $counter;?>" ><img src="/assets/service_images/<?php echo $value[1];?>"></a></div>
                                        <span><a href="#" id="modal<?php echo $counter;?>" data-toggle="modal" data-target="#myModal<?php echo $counter;?>" ><?php echo $value[0];?></a></span>
				</div>
                                <?php $counter++;} ?>
<!--				<div class="col-md-3 col-sm-3 zoomIn wow" data-wow-delay="0.1s" data-wow-duration="1.5s">
					<div class="bluecircle"><img src="{{asset('assets/images/advanced-icon.jpg')}}"></div>
					<span>ADVANCED Service</span>
				</div>
				<div class="col-md-3 col-sm-3 zoomIn wow" data-wow-delay="0.2s" data-wow-duration="2s">
					<div class="bluecircle"><img src="{{asset('assets/images/express-icon.jpg')}}"></div>
					<span>Express Service</span>
				</div>
				<div class="col-md-3 col-sm-3 zoomIn wow" data-wow-delay="0.3s" data-wow-duration="2.5s">
					<div class="bluecircle"><img src="{{asset('assets/images/company-icon.jpg')}}"></div>
					<span>Companion App</span>
				</div>-->
			</div>
		</div>
	</section>
	
	<!-- Application Feature -->
	<section id="applicationfeature">
		<div class="container">
			<div class="row"> 
				<div class="col-md-5 bounceInLeft wow" data-wow-delay="0.2s" data-wow-duration="2s">
					<h2>Application <span>Features</span></h2>
					<ul class="list-group">
                                                <?php foreach($data['app_features'] as $key=>$value){?>
                                                    <li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> <?php echo $value;?></li>
                                                <?php } ?>
<!--                                                <li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> Hourly Limit</li>
						<li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> Appointment Overlay</li>
						<li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> Shop Load Analysis</li>
						<li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> End Of Day Processing</li>
						<li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> Comparative Metrics</li>Book Express Service-->
					</ul>
                                        <a href="https://txm.serviceexpress.us/index.php" class="btn btn-primary btn-lg" target="_blank"><?php echo $data['application_feature_button_text'];?></a>
				</div>
			</div>	
		</div>		
		<div class="img bounceInRight wow" data-wow-delay="0.3s" data-wow-duration="2s"><img src="{{asset('assets/images/application-img.png')}}" class="img-responsive"></div>
	</section>
	
	<!-- General services -->
	<section id="generalservice">
		<div class="container">
			<div class="row"> 
				<div class="col-md-5 col-md-push-7 col-sm-5 col-sm-push-7 bounceInRight wow" data-wow-delay="0.5s" data-wow-duration="1s">
					<h2>General <span>ServiceS</span></h2>
					<ul class="list-group">
                                             <?php foreach($data['generalservices_info'] as $key=>$value){?>
						<li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> <?php echo $value;?></li>
                                             <?php } ?>
<!--						<li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> Comperitive matrix</li>
						<li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> Employee statistics </li>
						<li class="list-group-item"><span><img src="{{asset('assets/images/mark-icon.jpg')}}"></span> Score Card</li> -->
					</ul>
                                        <a href="javascript:void(0);" class="btn btn-primary btn-lg popup"  data-toggle="modal" data-target="#myModal2">3 Types of Services</a>
				</div>
			</div>	
		</div>		
		<div class="img1 slideInUp wow hidden-xs" data-wow-delay="0.1s" data-wow-duration="1s"><img src="{{asset('assets/images/1.png')}}" class="img-responsive"></div>
		<div class="img2 slideInUp wow hidden-xs" data-wow-delay="0.2s" data-wow-duration="2s"><img src="{{asset('assets/images/2.png')}}" class="img-responsive"></div>
		<div class="img3 slideInUp wow hidden-xs" data-wow-delay="0.3s" data-wow-duration="3s"><img src="{{asset('assets/images/3.png')}}" class="img-responsive"></div>
	</section>
	
	<!-- Track and reports -->
	<section id="trackandreport">
		<div class="container">
			<div class="row"> 
				<div class="col-md-5 slideInLeft wow">
                                    <?php
                                        $heading=explode(" ",$data['track_report_heading']);
                                    ?>
                                        <h2><?php echo $heading[0] ;?><span><?php for($i=0;$i<count($heading);$i++){ if($i==0) continue; echo " ".$heading[$i];}?></span></h2>
					<div>
						<?php echo $data['track_report_description'];?> 
					</div>
				</div>
				<div class="col-md-7 slideInUp wow">
					<img src="/assets/service_images/<?php echo $data['track_report_logo'];?>" class="img-responsive">
				</div>
			</div>	
		</div>		
	</section>
	
	<!-- Autodxs mobile -->
	<section id="autodxs">
		<div class="container">
			<div class="row"> 
				<div class="col-md-6 col-sm-6 slideInLeft wow" data-wow-delay="0.2s">
					<h2><samp>AutoDXS companion </samp><br> <span>phone app</span></h2>
					<div>
						<p>The AutoDXS companion phone app allows you to create an Express Service appointment with your dealership in just SIX TAPS of your finger. Begin with registering by entering your Dealers Code, your name, phone number and email address. To book an appointment, open the app, select the date, then select the time slot you desire. Next verify the data and book the appointment. You will be sent an emailed confirmation. Download the AutoDXS companion phone app from below links.</p> 
						<a href="#" class="appbtn" data-toggle="modal" data-target="#myModal"><span>Companion cell phone App <br> <span>Request Download</span></span> <i class="appicon"><img src="{{asset('assets/images/appicon.jpg')}}"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<img src="{{asset('assets/images/mobile-img-one.png')}}" class="rotateInUpLeft wow img-responsive" data-wow-delay="0.2s">
					<img src="{{asset('assets/images/mobile-img-two.png')}}" class="rotateInUpLeft wow setpos img-responsive" data-wow-delay="0.2s">
				</div>
			</div>	
		</div>		
	</section>
	
	<!-- Testimonials section -->
	<section id="testimonials">
		<div class="container zoomIn wow">
			<div class="row">
				<h2>What <span>Our Clients Say</span></h2>
			</div>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
                                     <?php 
                                      $count=0;
                                     foreach($data['client_test_info'] as $key=>$value){ ?>
					<div class="item <?php if($count==0){ echo 'active' ; } ?>">
						<div class="row">
<!--							<div class="col-xs-5 col-md-4 text-right">-->
                                                        <div class="col-xs-12 col-md-4 text-right" style="text-align: center;">
                                                            <img src="/assets/service_images/<?php echo $value[1];?>" class="userimg img-circle" style="height:210px;">
                                                        </div>
<!--							<div class="col-xs-6 col-md-8">-->
                                                        <div class="col-xs-12 col-md-8">
                                                            <p><?php echo strip_tags(substr($value[0],0,700))."..";?>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"  data-container="body" title="<?php echo strip_tags($value[0]);?>" data-placement="top">Read More</a></p>
							</div>
						</div>
					</div>
                                     <?php $count++; } ?>
<!--					<div class="item">
						<div class="row">
							<div class="col-xs-5 col-md-4 text-right"><img src="{{asset('assets/images/client-img.jpg')}}" class="userimg img-circle"></div>
							<div class="col-xs-6 col-md-8">
								<p>Curabitur ut rutrum ante. Donec id enim bibendum lectus aliquet lacinia nec ut massa. Sed est lorem, efficitur at vehicula vitae, rutrum at nulla. Praesent vel purus id mi mattis lobortis. Morbi nec tellus lectus. Aenean elementum justo vel elit rutrum vestibulum. Ut varius odio nec pellentesque aliquam. Vel vestibulum nisi libero nec sem. Vivamus in nunc nec nunc aliquam semper eu sit amet metus. Nam non vehicula leo. Vestibulum vitae ligula ante. Aenean cursus justo enim <br><span>Sed est lorem, efficitur at vehicula vitae <img src="{{asset('assets/images/arrow-icon.png')}}"></span></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-xs-5 col-md-4 text-right"><img src="{{asset('assets/images/client-img.jpg')}}" class="userimg img-circle"></div>
							<div class="col-xs-6 col-md-8">
								<p>Curabitur ut rutrum ante. Donec id enim bibendum lectus aliquet lacinia nec ut massa. Sed est lorem, efficitur at vehicula vitae, rutrum at nulla. Praesent vel purus id mi mattis lobortis. Morbi nec tellus lectus. Aenean elementum justo vel elit rutrum vestibulum. Ut varius odio nec pellentesque aliquam. Vel vestibulum nisi libero nec sem. Vivamus in nunc nec nunc aliquam semper eu sit amet metus. Nam non vehicula leo. Vestibulum vitae ligula ante. Aenean cursus justo enim <br><span>Sed est lorem, efficitur at vehicula vitae <img src="{{asset('assets/images/arrow-icon.png')}}"></span></p>
							</div>
						</div>
					</div>-->
				</div>				
				<ol class="carousel-indicators">
                                        <?php for($i=0;$i<$count;$i++){?>
                                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" <?php if($i==0){ echo 'class="active"' ; } ?>></li>
                                        <?php } ?>
<!--					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
				</ol>
			</div>
		</div>
	</section>
	
	<!-- brand support -->
	<section id="supportarea">
		<div class="container">
			<div class="row">
				<h2 class="bounceInDown wow">WE SUPPORT <span>ALL AUTO MANUFACTURES</span></h2>	
			</div>
			<div class="row">				
				 <div class="jcarousel-wrapper zoomIn wow">
					<div class="jcarousel">
						<ul>
                                                     <?php 
                                                       // $count=0;
                                                            foreach($data['manufactures_info'] as $key=>$value){ ?>
                                                                <li><img src="/assets/service_images/<?php echo $value[1];?>"><span><?php echo $value[0];?></span></li>
                                                            <?php } ?>
                                                        <!--							
<li><img src="{{asset('assets/images/app-icon-2.jpg')}}"><span>AutoAXM</span></li>
							<li><img src="{{asset('assets/images/app-icon-3.jpg')}}"><span>AutoBXM</span></li>
							<li><img src="{{asset('assets/images/app-icon-4.jpg')}}"><span>AutoCXM</span></li>
							<li><img src="{{asset('assets/images/app-icon-5.jpg')}}"><span>AutoFXS</span></li>
							<li><img src="{{asset('assets/images/app-icon-6.jpg')}}"><span>AutoGXS</span></li>
							<li><img src="{{asset('assets/images/app-icon-7.jpg')}}"><span>AutoLXS</span></li>
							<li><img src="{{asset('assets/images/app-icon-8.jpg')}}"><span>AutoJXM</span></li>
							<li><img src="{{asset('assets/images/app-icon-1.jpg')}}"><span>AutoDXS</span></li>
							<li><img src="{{asset('assets/images/app-icon-2.jpg')}}"><span>AutoAXM</span></li>
							<li><img src="{{asset('assets/images/app-icon-3.jpg')}}"><span>AutoBXM</span></li>
							<li><img src="{{asset('assets/images/app-icon-4.jpg')}}"><span>AutoCXM</span></li>
							<li><img src="{{asset('assets/images/app-icon-5.jpg')}}"><span>AutoFXS</span></li>
							<li><img src="{{asset('assets/images/app-icon-6.jpg')}}"><span>AutoGXS</span></li>
							<li><img src="{{asset('assets/images/app-icon-7.jpg')}}"><span>AutoLXS</span></li>
							<li><img src="{{asset('assets/images/app-icon-8.jpg')}}"><span>AutoJXM</span></li>-->
						</ul>
					</div>
					<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
					<a href="#" class="jcarousel-control-next">&rsaquo;</a> 
				</div>				
			</div>

		</div>
	</section>
       
        <!-- Button trigger modal -->
<!--        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Launch demo modal
        </button>-->
<!--        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">ENHANCED FEATURE</h4>
                </div>
                <div class="modal-body">
                  <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div> /.modal-content 
            </div> /.modal-dialog 
          </div> /.modal -->
<script type="text/javascript">
    function validate(){
        var emailID=document.getElementById("userEmail").value;
        
        if(!(isValidEmailAddress(emailID))){
            //alert("Please Enter valid email ID");
            $("#error").show();
            document.getElementById("userEmail").focus();
            return false;
        }
        else{
            
        }
    }

</script>
          <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <form action="/applink" onsubmit="return validate()" method="post">
                {{ csrf_field() }}
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title" id="myModalLabel">ENHANCED FEATURE</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                          You may download our companion cell phone app for your Android Cell phone or Apple IPhone. With this app, you will be able to book an appointment using your cell phone in just 6 taps of your finger in just 20 seconds.
                          <br>
                  *Please provide your email address and we will send you the download links.
                                </p>
                                <div class="row">
                                    <div class="alert alert-danger" id="error" style="display: none;">*Please Enter a valid email ID</div>
                                </div>
                            <div class="row">
                              <div class="col-sm-3"><label style="padding-top: 6px;">Your Email ID:</label></div>
                              <div class="col-sm-6"><input type="text" name="userEmail" id="userEmail" placeholder="Enter your email" class="form-control" style="width:300px;"></div>
                              <div class="col-sm-3"><input type="submit" value="Send" class="btn btn-primary"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                </form>
          </div>


            <div class="modal fade in" id="myModal2" tabindex="-1" role="dialog2" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title" id="myModalLabel">3 TYPES OF SERVICES</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo $data['types_of_services'];?>


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
               </div>
                <?php $counter=3;foreach($data['services'] as $key=>$value){ ?>
                <div class="modal fade in" id="myModal<?php echo $counter;?>" tabindex="-1" role="dialog<?php echo $counter;?>" aria-labelledby="myModalLabel<?php echo $counter;?>">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title" id="myModalLabel"><?php echo $value[0];?></h4>
                        </div>
                        <div class="modal-body">
                           <?php //echo $data['types_of_services'];?>
                            <?php echo $value[2];?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
               </div>
                <?php $counter++; }?>
<!--	<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" title="List of Users">
            <p>
              *Please provide your email address and we will send you pdf.
            </p>
            <div class="row">
                <div class="alert alert-danger" id="error" style="display: none;">*Please Enter a valid email ID</div>
            </div>
            <div class="row">
              <div class="col-sm-3"><label style="padding-top: 6px;">Email:</label></div>
              <div class="col-sm-3"><input type="text" name="email" id="email" placeholder="Enter your email" class="form-control" style="width:300px;"></div>
            </div>
            <div class="row"><br></div>
            <div class="row">
                <lable style="padding-top:6px;">Select Export Type:</label>
                <input type="radio" name="selected_type" value="plain" checked="checked">&nbsp;Text File&nbsp;
                <input type="radio" name="selected_type" value="csv" >&nbsp;CSV&nbsp;
                <input type="radio" name="selected_type" value="pdf" >&nbsp;PDF&nbsp;
            </div>
        </div>-->
        <!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!--        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" />
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />-->
<!-- <script type='text/javascript' src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
    
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->
<!--<script>jQuery.noConflict();</script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>-->
<!--    <link type="text/css" rel="stylesheet" href="{{asset('assets/jquery.avgrund.js-master/style/avgrund.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    	<script src="../jquery.avgrund.js"></script>	
    <script type="text/javascript" src="{{asset('assets/jquery.avgrund.js-master/jquery.avgrund.js')}}"></script>-->
            

        

<!--        <script>
	$(function() {
		$('a.popup').avgrund({
			height: 200,
			holderClass: 'custom',
			showClose: true,
			showCloseText: 'close',
			onBlurContainer: '.container',
			template: '<p>So implement your design and place content here! If you want to close modal, please hit "Esc", click somewhere on the screen or use special button.</p>' +
			'<div>' +
			'<a href="http://github.com/voronianski/jquery.avgrund.js" target="_blank" class="github">Avgrund on Github</a>' +
			'<a href="http://twitter.com/voronianski" target="_blank" class="twitter">Twitter</a>' +
			'<a href="http://dribbble.com/voronianski" target="_blank" class="dribble">Dribbble</a>' +
			'</div>'
		});
	});
	</script>-->
@stop()
