<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Personal information</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Welcome,</strong>{{$user->name}}</h1>
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Here is your personal information</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Full name</label>
                                        <h4>Your full name</h4>
			                        	<input type="text" name="form-username" class="form-username form-control" id="form-username" value= {{$user->name}}>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Home address</label>
                                         <h4>Your home address</h4>
			                        	<input type="text" name="" class="form-password form-control" id="form-password" value = {{$user->address}}> 
			                        </div>
			                         <div class="form-group">
			                        	<label class="sr-only" for="form-password">Mobile number</label>
                                         <h4>Your mobile number</h4>
			                        	<input type="text" name="mobile" class="form-password form-control" id="form-password" value = {{$user->mobile_number}}>
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Home number</label>
                                         <h4>Your home number</h4>
                                        <input type="text" name="home" class="form-password form-control" id="form-password" value = {{$user->home_number}}>
                                    </div>
                                    <div class="form-group">
                                         <h4>Your work number</h4>
                                        <label class="sr-only" for="form-password">Work number</label>
                                        <input type="text" name="work" class="form-password form-control" id="form-password" value = {{$user->work_number}}>
                                    </div>
                                    <button type="submit" class="btn">Confirm</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>