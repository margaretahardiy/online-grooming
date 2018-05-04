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
<!--header start here-->
<div class="header-bottom">
  <div class="fixed-header">	
	<div class="container">
		<div class="header-main">
			<div class="header-left">
				<h2><a href="index.html"></a></h2>
			</div>
			<div class="header-right">					
				  <div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul class="nav1">
						<li><a href="/welcome" class="active">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#services">Services</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
						<li><a class="scroll" href="#contact" >Contact</a></li>
						<li><a href="/profile">Profile</a></li>
						<li><a href="/dogs">Dogs</a></li>
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
<!--services start here-->
<div class="services" id="services">
	<div class="container">
		<div class="services-main">
			<div class="ser-top">
				<h3>MY DOGS</h3>
			</div>
            <div class="col-md-4 ser-grid">
					 <div class="view view-first">
	                    <img src="images/add.png"/>
	                    <div class="mask">
	                        <h2>Add more dog</h2>	                                              
	                    </div>
                    </div>
			</div>
			<div class="ser-bottom">
            @foreach ($dogs as $dog)
            <div class="col-md-4 ser-grid">
					 <div class="view view-first">
                     <a href="/dogs/{{ $dog->id }}">
	                    <img src="images/s3.png"/>
	                    <div class="mask">
	                        <h2>Pets</h2>	                                              
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
<!--services end here-->

</body>
</html>

		