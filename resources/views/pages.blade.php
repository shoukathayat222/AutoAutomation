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
	<section id="calltoolbar">
		<div class="container">
			<div class="row">
				<span>Call our toll free Number : </span> <strong><?php echo $data['Corporate_Office_Toll_Free'];?></strong>
			</div>
		</div>
	</section>
	
        <section id="contactus">
		<div class="container">
			<div class="row text-center">
				<h2>Contact <span>Us</span></h2>			
			</div>
			<div class="row">
				<div class="col-md-7"> 
<!--					<div class="textone">
						<img src="{{asset('assets/images/phone-icon.png')}}">
						<div class="contentbox">
							<div class="row">
								<span class="col-md-4 col-xs-6">Corporate Office Toll Free</span>
								<span class="col-md-7 col-xs-6"> : <?php echo $data['Corporate_Office_Toll_Free'];?></span>
							</div>
							<div class="row">
								<span class="col-md-4 col-xs-6">Local Fax</span>
								<span class="col-md-7 col-xs-6"> : <?php echo $data['Local_Fax'];?></span>
							</div>
						</div>
					</div>
					<div class="textone">
						<img src="{{asset('assets/images/mail-icon.png')}}">
						<div class="contentbox">
							<div class="row">
								<span class="col-md-4 col-xs-6">Accounting</span>
								<span class="col-md-7 col-xs-6"> : <a href="mailto:<?php echo $data['Accounting'];?>"><?php echo $data['Accounting'];?></a></span>
							</div>
							<div class="row">
								<span class="col-md-4 col-xs-6">Customer Service</span>
								<span class="col-md-7 col-xs-6"> : <a href="mailto:<?php echo $data['Customer_Service'];?>"><?php echo $data['Customer_Service'];?></a></span>
							</div>
							<div class="row">
								<span class="col-md-4 col-xs-6">Sales</span>
								<span class="col-md-7 col-xs-6"> : <a href="mailto:<?php echo $data['Sales'];?>"><?php echo $data['Sales'];?></a></span>
							</div>
							<div class="row">
								<span class="col-md-4 col-xs-6">Technical Support</span>
								<span class="col-md-7 col-xs-6"> : <a href="mailto:<?php echo $data['Technical_Support'];?>"><?php echo $data['Technical_Support'];?></a></span>
							</div>
						</div>
					</div>
					<div class="textone">
                                                <img src="{{asset('assets/images/marker-icon.png')}}">
						<div class="contentbox">
							<div class="row">
								<span class="col-md-4 col-xs-6">Corporate Address</span>
								<span class="col-md-7 col-xs-6"> : <?php echo $data['Corporate_Address'];?></span>
							</div>
							<div class="row">
								<span class="col-md-4 col-xs-6">Mailing address</span>
								<span class="col-md-7 col-xs-6"> : <?php echo $data['Mailing_address'];?></span>
							</div>
						</div>
					</div>-->
                                        <div class="textone">
                                                <?php if($data['Corporate_Office_Toll_Free']!='' || $data['Local_Fax']!='') {?>
						<img src="{{asset('assets/images/phone-icon.png')}}">
						<div class="contentbox">
                                                        <?php if($data['Corporate_Office_Toll_Free']!='' ) {?>
							<div class="row">
								<span class="col-md-4 col-xs-6">Corporate Office Toll Free</span>
								<span class="col-md-7 col-xs-6"><?php echo $data['Corporate_Office_Toll_Free'];?></span>
							</div>
                                                        <?php } ?>
                                                         <?php if($data['Local_Fax']!='') {?>
							<div class="row">
								<span class="col-md-4 col-xs-6">Local Fax</span>
								<span class="col-md-7 col-xs-6"><?php echo $data['Local_Fax'];?></span>
							</div>
                                                         <?php } ?>
						</div>
                                                <?php } ?>
					</div>
					<div class="textone">
                                                <?php if($data['Accounting']!='' || $data['Customer_Service']!='' || $data['Sales']!='' || $data['Technical_Support']!='') {?>
						<img src="{{asset('assets/images/mail-icon.png')}}">
						<div class="contentbox">
                                                        <?php if($data['Accounting']!='' ) {?>
							<div class="row">
								<span class="col-md-4 col-xs-6">Accounting</span>
								<span class="col-md-7 col-xs-6"><a href="mailto:<?php echo $data['Accounting'];?>"><?php echo $data['Accounting'];?></a></span>
							</div>
                                                        <?php } ?>
                                                        <?php if($data['Customer_Service']!='' ) {?>
							<div class="row">
								<span class="col-md-4 col-xs-6">Customer Service</span>
								<span class="col-md-7 col-xs-6"><a href="mailto:<?php echo $data['Customer_Service'];?>"><?php echo $data['Customer_Service'];?></a></span>
							</div>
                                                        <?php } ?>
                                                        <?php if( $data['Sales']!='' ) {?>
							<div class="row">
								<span class="col-md-4 col-xs-6">Sales</span>
								<span class="col-md-7 col-xs-6"><a href="mailto:<?php echo $data['Sales'];?>"><?php echo $data['Sales'];?></a></span>
							</div>
                                                        <?php } ?>
                                                        <?php if($data['Technical_Support']!='') {?>
							<div class="row">
								<span class="col-md-4 col-xs-6">Technical Support</span>
								<span class="col-md-7 col-xs-6"><a href="mailto:<?php echo $data['Technical_Support'];?>"><?php echo $data['Technical_Support'];?></a></span>
							</div>
                                                        <?php } ?>
						</div>
                                                <?php } ?>
					</div>
					<div class="textone">
                                                <?php if($data['Corporate_Address']!='' || $data['Mailing_address']!='') {?>
						<img src="{{asset('assets/images/marker-icon.png')}}">
						<div class="contentbox">
                                                        <?php if($data['Corporate_Address']!='' ) {?>
							<div class="row">
								<span class="col-md-4 col-xs-6">Corporate Address</span>
								<span class="col-md-7 col-xs-6"><?php echo $data['Corporate_Address'];?></span>
							</div>
                                                        <?php } ?>
                                                        <?php if($data['Mailing_address']!='') {?>
							<div class="row">
								<span class="col-md-4 col-xs-6">Mailing address</span>
								<span class="col-md-7 col-xs-6"><?php echo $data['Mailing_address'];?></span>
							</div>
                                                        <?php }?>
						</div>
                                                <?php } ?>
					</div>
				</div>
				<div class="col-md-5"> 
					<!--<img src="images/contact-map-img.jpg" class="img-responsive">-->
                                    <!--<script src="http://maps.googleapis.com/maps/api/js"></script>-->
                                    <script>
                                        function initialize()
                                        {
                                          var mapProp = {
                                            center: new google.maps.LatLng(36.585665,-121.853650),
                                            zoom:9,
                                            mapTypeId: google.maps.MapTypeId.ROADMAP
                                          };
                                          var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                                        }

                                        function loadScript()
                                        {
                                          var script = document.createElement("script");
                                          script.type = "text/javascript";
                                          script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAxgXL6bqYoQEj9oPR1x7VjfPJYkR2yyCo&sensor=false&callback=initialize";
                                          document.body.appendChild(script);
                                        }

                                        window.onload = loadScript;
                                        </script>
                                    <div id="googleMap" style="width:458px;height:254px;"></div>
				</div>
			</div>
		</div>
	</section>
	
	
@endsection
