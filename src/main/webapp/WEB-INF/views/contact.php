<?php
// Free Bootstrap Themes : www.365bootstrap.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitContact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject = $_POST['subject'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "365Bootstrap - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "365Bootstrap.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.365bootstrap.com">

	<title>Boloba - Free Bootstrap Themes</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="resources/css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="resources/owl-carousel/owl.carousel.css" rel="stylesheet">
   <link href="resources/owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="resources/css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="resources/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>

 <body>
<header>

	<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">
					<img src="images/logo.png" class="hidden-xs" alt="">
					<div class="visible-xs">Boloba</div>
				</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#services">Services</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.html#testimonials">Testimonials</a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.html#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#subcribe">Subcribe</a>
                    </li>
					<li>
                        <a class="page-scroll" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- CAROUSEL -->
	<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel" data-interval="4000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>
	 
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="resources/images/banner1.jpg" alt="...">
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>AENEAN FEUGIAT IN ANTE ET BLANDIT </h1>
						<hr>
						<p>Vestibulum posuere molestie risus,  ac interdum magna porta non. </p>
						<a href="" class="btn btn-header">Learn More</a>
					</div>
				</div><!-- /header-text -->
			</div>
			<div class="item">
				<img src="resources/images/banner2.jpg" alt="...">
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>PELLENTESQUE RUTRUM FRINGILLA ELEMENTUM</h1>
						<hr>
						<p>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. </p>
						<a href="" class="btn btn-header">Learn More</a>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
	 
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div> <!-- Carousel -->
	
</header>

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="contact-page">
		<div id="main-content">
			<div class="google-map-container " style="height:600px;" data-map-id="google-map-1780421768" data-lat-value="37.8968703" data-lng-value="-122.508863" data-zoom-value="15" data-scroll-wheel="" data-pan-control="1" data-zoom-control="1" data-map-draggable="1" data-map-marker="[&quot;http:\/\/ld-wp.template-help.com\/wordpress_58523\/wp-content\/uploads\/2016\/02\/map_marker.png&quot;,48,64,false]" data-map-style="[{&quot;featureType&quot;: &quot;administrative.land_parcel&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]},{&quot;featureType&quot;: &quot;landscape.man_made&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]},{&quot;featureType&quot;: &quot;poi&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]},{&quot;featureType&quot;: &quot;road&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;},{&quot;lightness&quot;: 20}]},{&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;hue&quot;: &quot;#f49935&quot;}]},{&quot;featureType&quot;: &quot;road.highway&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}]},{&quot;featureType&quot;: &quot;road.arterial&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;hue&quot;: &quot;#fad959&quot;}]},{&quot;featureType&quot;: &quot;road.arterial&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]},{&quot;featureType&quot;: &quot;road.local&quot;,&quot;elementType&quot;: &quot;geometry&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}]},{&quot;featureType&quot;: &quot;road.local&quot;,&quot;elementType&quot;: &quot;labels&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;simplified&quot;}]},{&quot;featureType&quot;: &quot;transit&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;visibility&quot;: &quot;off&quot;}]},{&quot;featureType&quot;: &quot;water&quot;,&quot;elementType&quot;: &quot;all&quot;,&quot;stylers&quot;: [{&quot;hue&quot;: &quot;#a1cdfc&quot;},{&quot;saturation&quot;: 30},{&quot;lightness&quot;: 49}]}]">
				<div id="google-map-1780421768" class="google-map" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">
					<div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3 style="color: #333;">Complete the Submission Form</h3>
						<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span>
						<p style="margin: 20px 0;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
						<h3 style="color: #333;">Or Just Make a Call</h3>
						<p>JL.Kemacetan timur no.23. block.Q3<br>
							Jakarta-Indonesia</p>
						   <p>+6221 888 888 90 <br>
							+6221 888 88891</p>
						<p>info@yourdomain.com</p>
					</div>
					<div class="col-md-8">
						<div class="contact_form">
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<form id="ff" name="form1" method="post" action="contact.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
										</div>						
										<button type="submit" class="btn btn-skin blue btn-block" name="submit" id="submit">
									Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row"> 
					<div class="col-footer col-md-3">
						<h2 class="footer-title">About Us</h2>
						<div class="textwidget">Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan. <br> <br> 
						Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan.</div>
					</div> 
					<div class="col-footer col-md-3 widget_recent_entries">
						<h2 class="footer-title">Recent Posts</h2>
						<ul>
							<li><a href="#">Vestibulum posuere molestie risus</a></li>
							<li><a href="#">Aenean feugiat in ante et blandit</a></li>
							<li><a href="#">Curabitur tincidunt porta lorem vitae accumsan</a></li>
							<li><a href="#">Vestibulum posuere molestie risus</a></li>
						</ul>
					</div>
					<div class="col-footer col-md-3">
						<h2 class="footer-title">NEWS LETTER</h2>
						If you want to receive our latest news send directly to your email, please leave your email address bellow. Subscription is free and you can cancel anytime.<br><br>
						<div class="textwidget">My Company , 4578 Marmora Road, Glasgow D04 89GR</div>
						<div class="textwidget">0123-456-789 E-mail: info@demolink.org</div>
					</div>
					<div class="col-footer col-md-3">
						<h2 class="footer-title">Tags</h2>
						<div class="footer-tags">
							<a href="#">animals</a>
							<a href="#">cooking</a>
							<a href="#">countries</a>
							<a href="#">city</a>
							<a href="#">children</a>
							<a href="#">home</a>
							<a href="#">likes</a>
							<a href="#">photo</a>
							<a href="#">link</a>
							<a href="#">law</a>
							<a href="#">shopping</a>
							<a href="#">skate</a>
							<a href="#">scholl</a>
							<a href="#">video</a>
							<a href="#">travel</a>
							<a href="#">images</a>
							<a href="#">love</a>
							<a href="#">lists</a>
							<a href="#">makeup</a>
							<a href="#">media</a>
							<a href="#">password</a>
							<a href="#">pagination</a>
							<a href="#">wildlife</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<p>Copyright 20xx - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">365BOOTSTRAP</a></p>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="https://www.facebook.com/365bootstrap"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
  
	<!-- jQuery -->
	<script type="text/javascript" src="resources/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="resources/js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="resources/js/jquery.easing.min.js"></script>
	<script src="resources/js/classie.js"></script>
	<script src="resources/js/cbpAnimatedHeader.js"></script>
	
	<!-- carousel -->
	<script src="resources/owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 3,
		itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,2],
		navigation: false,
		navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>']
		
      });
	  $("#owl-test").owlCarousel({
        autoPlay: 3000,
        items : 1,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,2],
		navigation: true,
		navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
		pagination: false
      });
    });
    </script>
	
	<!-- Google Map -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var wp_load_style = ["cherry-social.css","cherry-testimonials.css","contact-form-7.css","font-awesome.css","swiper.css","magnific-popup.css","cherry-shortcodes-all.css","cherry-charts.css","theme57758-grid-base.css","theme57758-grid-responsive.css","slick.css","cherryframework4-drop-downs.css","theme57758-main.css","theme57758-main-responsive.css","cherryframework4-add-ons.css","theme57758-style.css","theme26118_material_icon.css","cherry-google-fonts.css","booked-gf.css","booked-fontawesome.css","booked-tooltipster.css","booked-tooltipster-theme.css","booked-animations.css","booked-styles.css","booked-responsive.css","mpce-theme.css"];
	var wp_load_script = ["cherry-api.js","jquery.js","booked-spin-js.js","booked-spin-jquery.js","booked-tooltipster.js","booked-functions.js","comment-reply.js","magnific-popup.js","cherry-script.js","theme57758-script.js"];
	var cherry_ajax = "a180e8e82f";
	/* ]]> */
	</script>
	<script type="text/javascript" src="js/Gmap/cherry-api.min.js"></script>
	<script type="text/javascript" src="js/Gmap/forms-api.min.js"></script>
	<script type="text/javascript" src="js/Gmap/init.min.js"></script>
	<script type="text/javascript" src="js/Gmap/js"></script>
	<script type="text/javascript" src="js/Gmap/google-map.min.js"></script>
	
</body>
</html>