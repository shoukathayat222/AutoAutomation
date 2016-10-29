<!DOCTYPE html>
<html>
<head>
    <title>Automation</title>
    <link rel="icon" type="image/png" href="http://www.autoautomation.com/assets/images/logo.png"/>
<!--    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />-->
    <link rel="shortcut icon" type="image/x-icon" href="http://www.autoautomation.com/assets/images/logo.png" />
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<meta http-equiv=X-UA-Compatible content="IE=edge" />
	<meta name=viewport content="width=device-width,initial-scale=1" />	
	<link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/font-awesome.css')}}">
	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100'>
	<link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/style.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/animate.css')}}">	
	<link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/jcarousel.responsive.css')}}">	
        
        
<!--      Fonts 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

     Styles 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>-->
<style>
    .head-ban {
        padding-top: 20px;
       }
       .head-ban img {
            max-width: 100%;
        }
</style>
</head>
<body>
	
	<!-- Header -->
	<header id="header"> 
		<nav class="navbar navbar-default">
		  <div class="container">
<!--			  <div class="row">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
                                    navbar-brand
                                        
                                    <div style="float:left;"><a class="" href="./"><img class="img-responsive" src="{{asset('assets/images/logo.png')}}" style="height:70px;padding-left:30px;"></a></div>
                                    <div style="float:left;margin-left: 110px;margin-top:20px;"><img src="{{asset('assets/images/home-banner-text.jpg')}}" ></div>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="#">User Guides & Manuals </a></li>
					<li><a href="https://get.teamviewer.com/autotxm">support & Training</a></li>
					<li><a href="./contactus">Contact Us</a></li>
				  </ul>
				</div>
			</div>-->
                        <div class="row">
                            <div class="col-sm-7">
                             <div class="row">
                                 <div class="col-sm-5 col-xs-8">
                                      <div class="logo">
                                          <a class="" href="./"><img class="img-responsive" src="{{asset('assets/images/logo.png')}}" style="height:70px;"></a>
                                         </div>
                                    </div>
                                    <div class="col-sm-7 col-xs-4">
                                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                     </button>
                                     <div class="head-ban hidden-xs">
                                         <img src="{{asset('assets/images/home-banner-text.jpg')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav navbar-right">
                                    <!--<li><a href="#">User Guides & Manuals </a></li>-->
                                    <li><a href="https://get.teamviewer.com/autotxm">support &amp; Training</a></li>
                                    <li><a href="./contactus">Contact Us</a></li>
                                  </ul>
                                </div>
                            </div>


                       </div>
		  </div>
		</nav>
	</header>
	
	@yield('content')
        
	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h2>Contact <span>Us</span></h2>
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
					<h2>Feed<span>back</span></h2>
					<div class="formset">
                                            <form action="{{ url('/feedback') }}" method="post">
                                                 {{ csrf_field() }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Name" name="name">
								</div>
								<div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Email" name="email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                                                    <textarea class="form-control" rows="3" name="comments">Feedback / Suggestions</textarea>
								</div>
							</div>
							<div class="col-md-12">
								<input type="submit" class="btn btn-lg btn-primary" value="submit">
							</div>
						</div>
                                            </form>
						<div class="row">
							<div class="copyright"><p>
                                                                <?php //foreach($data['pages_info'] as $row) { ?>
                                                                <a href="./privacy">PRIVACY<?php //echo strtoupper($row);?></a>
                                                                <a href="https://get.teamviewer.com/autotxm" target="_blank">SUPPORT</a>
                                                                <?php //} ?>
                                                                <?php echo $data['Copyright'];?></p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- main javascript -->
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/jquery-3.0.0.min.js')}}"></script>
	<!-- bootstrap -->
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>	
	<!-- wow animation -->
        <script type="text/javascript" src="{{asset('assets/bootstrap/js/wow.min.js')}}"></script>
	<!-- brands responsive -->
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/jquery.jcarousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/jcarousel.responsive.js')}}"></script>
	<!-- custom javascript -->
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/script.js')}}"></script>
        <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
     
});

</script>
</body>
</html>