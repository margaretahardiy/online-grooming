<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dog Information</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/form-elements.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css')}}">
    </head>
    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Welcome,</strong> Your dog's profile</h1>
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Update your dog's information</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="POST" class="/dog/{{$dog->id}}" enctype="multipart/form-data">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Name</label>
                                        <h4>Name</h4>
			                        	<input type="text" name="name" class="form-username form-control" id="form-username" value= "{{$dog->name}}" >
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Breed</label>
                                         <h4>Breed</h4>
			                        	<input type="text" name="breed" class="form-password form-control" id="form-password" value= "{{$dog->breed}}"> 
			                        </div>
			                         <div class="form-group">
			                        	<label class="sr-only" for="form-password">DateOfBirth</label>
                                         <h4>Date Of Birth</h4>
			                        	<input type="text" name="dateofbirth" class="form-password form-control" id="form-password" value= "{{$dog->date_of_birth}}">
			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">DateOfBirth</label>
                                         <h4>Photo</h4>
			                        	 <input type="file" name="photo"/>
			                        </div>
                                    <button type="submit" class="btn">Update</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
        <!-- Javascript -->
        <script src="{{ URL::asset('assets/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/scripts.js')}}"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>