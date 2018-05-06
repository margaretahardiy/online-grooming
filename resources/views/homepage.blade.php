<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Rambla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<!--banner strat here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
			<div class="banner-text">
				<a href="index.html"><div class="logo">
					<h1>Tom's Dog Grooming</h1>
					<p>Get your dog grooming in your house</p>
				</div></a>			 
			</div>
			<h3>We provide best online dog grooming service!</h3>
		</div>
	</div>
</div>
<!--baner end here-->
<!--header start here-->
<div class="header-bottom">
  <div class="fixed-header">	
	<div class="container">
		<div class="header-main">
			<div class="header-left">
				<h2><a href="index.html">Tom's Dog Grooming</a></h2>
			</div>
			<div class="header-right">					
				  <div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li><a href="homepage.html" class="active">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#dogs">Dogs</a></li>
						<li><a class="scroll" href="#services">Services</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
						<li><a class="scroll" href="#appointment" >Appointments</a></li>
						<li><a href="/profile" >Profile</a></li>
					</ul>	
					<!-- script-for-menu -->
					 <script>
					   $( "span.menu" ).click(function() {
						 $( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						  });
						 });
					</script>
					<!-- /script-for-menu -->
					<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
				</div>
			 </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--About strat here-->
<div class="about" id="about">
	<div class="container">
		<div class="about-main">
			          <h3>About</h3>
			<div class="col-md-6 about-left">
				<img src="images/a1.png" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 about-right">
				<h4>Tom's Online Dog Grooming house</h4>
				<h5>Book a service online for your dog</h5>
				<p>This house aims to provide you fantastic online grooming booking service. As long as you are living in Melbourne, you can book a grooming service for your dog at anytime! so convenienct!</p>			
			    <ul>
			    	<li><a href="#"> <span class="fts"> </span>Foots </a></li>
			    	<li><a href="#"> <span class="brh"> </span>Brush</a></li>
			    	<li><a href="#"> <span class="feed"> </span>Feed </a></li>
			    </ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--About text end here-->

<!--pets show strat here-->
<div class="pets-show">
	<div class="container">
		<section class="slider">
		 <div class="flexslider">
			<ul class="slides">
			  <li>
			  	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>Dogs like us and so will you!</h3>
						<h4>The Importance of Regular Grooming</h4>
						<p>Regular grooming is important for their health and wellbeing, not just their appearance.It is also an important part of owning a pet.</p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/p2.png" alt="" class="img-responsive">
					</div>
				 <div class="clearfix"> </div>
				</div>
			  </li>
			  <li>
			 	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>A beautiful puppy is a happy puppy! </h3>
						<h4>When to start grooming</h4>
						<p>Start grooming your pet as a puppy and pick times when they are tired and less energetic. Limit your grooming sessions to five minutes as puppies have short attention spans even in this tired state. </p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/p4.png" alt="" class="img-responsive">
					</div>
				  <div class="clearfix"> </div>
				</div>
			  </li>
			  <li>
			 	<div class="pets-show-main">
					<div class="col-md-6 pets-show-left">
						<h3>Is your dog a dapper dog?</h3>
						<h4>What to groom</h4>
						<p>Comb and brush in the direction of hair growth until tangle free. Various types of combs and brushes are available for different coats and degree of matting. </p>
					</div>
					<div class="col-md-6 pets-show-right">
						<img src="images/p5.png" alt="" class="img-responsive">
					</div>
				 <div class="clearfix"> </div>
				</div>
			  </li>
		    </ul>
		 </div>
	  </section>
	</div>
</div>
<!--pets show end here-->
<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
			<!-- FlexSlider -->

<!--dogs start here-->
<div class="dogs" id="dogs">
	<div class="container">
		<div class="services-main">
			<div class="ser-top">
				<h3>Your Dogs</h3>
			</div>
			<div class="col-md-4 ser-grid">
					 <div class="view view-first">
					 <a href="/insert-dog">
	                    <img src="images/add.png"/>
	                    <div class="mask">
	                        <h2>Add more dog</h2>	                                              
	                    </div>
					</a>
                    </div>
			</div>			
			<div class="ser-bottom">
            @foreach ($dogs as $dog)
            <div class="col-md-4 ser-grid">
					 <div class="view view-first">
                     <a href="/dogs/{{ $dog->id }}">
	                    <img src="<?php echo asset("storage/$dog->photo")?>" width="200" height="200" class="circular--square"/>
	                    <div class="mask">
	                        <h2>{{ $dog->name }}</h2>	                                              
	                    </div>
                        </a>
                    </div>
					<h4>{{ $dog->name }}</h4>
					<p>{{ $dog->breed }}</p>
				</div>
            @endforeach
			 <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--dogs end here-->

<!--services start here-->
<div class="services" id="services">
	<div class="container">
		<div class="services-main">
			<div class="ser-top">
				<h3>Services We Provide</h3>
			</div>
			<div class="ser-bottom">
				<div class="col-md-4 ser-grid">
					 <div class="view view-first">
	                   	<img src="images/service1.png" />
	                    <a href="info/Service.html">
	                    <div class="mask">
	                        <h2>Wash Only</h2>	                                              
	                    </div></a>
                    </div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/service2.png" />
	                    <a href="info/Service.html">
	                    <div class="mask">
	                        <h2>wash and nail clipping</h2>	                                              
	                    </div></a>
                    </div>
				</div>
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
	                    <img src="images/service3.png" />
	                    <a href="info/Service.html">
	                    <div class="mask">
	                        <h2>deluxe grooming</h2>	                                              
	                    </div></a>
                    </div>
				</div>	
			 <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--services end here-->


<!---gallery strat here-->
<div id="gallery" class="gallery">
	<div class="container">
		<h3 class="tittle need_col">Gallery</h3>
		<div class="gallery-grids">
				<div class="gallery-grid">
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal1"  data-toggle="modal">		
								<img src="images/g1.jpg" alt="img25" class="img-responsive"/>										
									</a>													
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal2"  data-toggle="modal">		
								<img src="images/g2.jpg" alt="img25" class="img-responsive"/>										
									</a>															
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal3"  data-toggle="modal">		
								<img src="images/g3.jpg" alt="img25" class="img-responsive"/>										
									</a>															
							</figure>
					</div>
				</div>
				<div class="gallery-grid">
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal4"  data-toggle="modal">		
								<img src="images/g4.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal5"  data-toggle="modal">		
								<img src="images/g5.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal6"  data-toggle="modal">		
								<img src="images/g6.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
				</div>
				<div class="gallery-grid">
					 <div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal7"  data-toggle="modal">		
								<img src="images/g7.jpg" alt="img25" class="img-responsive"/>										
									</a>						
							</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal8"  data-toggle="modal">		
								<img src="images/g8.jpg" alt="img25" class="img-responsive"/>										
									</a>						
						</figure>
					</div>
					<div class="gallery-img slideanim">
						<figure class="effect-jazz">
							<a href="#portfolioModal9"  data-toggle="modal">		
								<img src="images/g9.jpg" alt="img25" class="img-responsive"/>										
									</a>					
							</figure>
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>		
	</div>
</div>

<!--services start here-->
<div class="appointment" id="appointment">
	<div class="container">
		<div class="services-main">
			<div class="ser-top">
				<h3>Your Appointments</h3>
			</div>
			<div class="ser-bottom">
			@foreach ($appointments as $appointment)
            <div class="col-md-4 ser-grid">
					 <div class="view view-first">
                     <a href="/edit-appointment/{{ $appointment->id }}">
	                   <img src="<?php echo asset("storage/{$appointment->dog->photo}")?>" width="200" height="200" class="circular--square"/>

	                    <div class="mask">
	                        <h2>{{ $appointment->dog->name }}</h2>	                                              
	                    </div>
                        </a>
                    </div>
					<h4>{{ \Carbon\Carbon::parse($appointment->date_time)->format('d/m/Y h:i A') }}</h4>
				</div>
            @endforeach
				<div class="col-md-4 ser-grid">
					<div class="view view-first">
						<a href="/new-appointment">
	                    <img src="images/add.png" />
	                   	</a>
                    </div>
				</div>	
			 <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--services end here-->

<!--footer strat here-->
<div class="footer">
		<div class="container">
			
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-text">			
				
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</div>
</body>
</html>

		