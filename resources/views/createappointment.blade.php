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
                            <h1> Insert your appointment here!</h1>
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Your appointment information</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="POST" class = "/new-appointment"  >
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Date</label>
                                        <h4>Date</h4>
			                        	<input type="date" name="date" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Time</label>
                                         <h4>Time</h4>
                                         <select id="schedules" name="schedules">
                                         <option value="0">- Select Time -</option>
                                        </select>
			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">Dog</label>
                                         <h4>Dog</h4>
                                         <select id="dogs" name="dogs">
                                         <option value="0">- Select Your Dog -</option>
                                         @foreach ($dogs as $dog)
                                         <option value="{{ $dog->id }}"> {{ $dog->name }}</option>
			                             @endforeach
                                        </select>
			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">Service</label>
                                         <h4>Service</h4>
                                         <select id="services" name="services">
                                         <option value="0">- Select Service -</option>
                                         <option value="Wash Only"> Wash Only</option>
                                         <option value="Wash and Nail Clipping"> Wash and Nail Clipping </option>
                                         <option value="Deluxe Grooming"> Deluxe Grooming </option>
                                        </select>
			                        </div>
                                    
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">General Comment</label>
                                         <h4>General Comment</h4>
			                        	<input type="text" name="comment" class="form-password form-control" id="form-password"> 
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
        <script>
        $('input[type="date"]').change(function(){
           // alert(this.value);         //Date in full format alert(new Date(this.value));
            var inputDate = new Date(this.value);
            $.ajax({
            type: "GET",
            url: "/appointment-date/" + this.value,
            success: function(msg) {
                var len = msg['msg'].length;
                msg['msg'][0]['date'];  
                $('#schedules').empty();
                 for( var i = 0; i<len; i++){
                    // alert(len); 
                    var date = msg['msg'][i]['date'];
                    var newDate = new Date(date);
                    var h = newDate.getHours();
                    var formattedH = ("0" + h).slice(-2);
                    var m = newDate.getMinutes();
                    var formattedM = ("0" + m).slice(-2);
                    var time = formattedH + ":" + formattedM;

                    $('#schedules').append($("<option></option>").attr('value', date).text(time));
                }
            }
        });
        });
    </script>
    </body>

</html>