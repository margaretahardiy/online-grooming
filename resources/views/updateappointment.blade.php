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
                            @if($user->client_status == 1)
                            <h1> Reschedule your appointment here!</h1>
                            @else 
                            <h1> Appointment Details</h1>
                            @endif
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                                    @if($user->client_status == 1)
                        			<h3>Your appointment information</h3>
                                    @else 
                                    <h1> The appointment details</h1>
                                    @endif
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="POST" class = "/edit-appointment"  >
			                    	
                                     @if($user->client_status == 1)
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">General Comment</label>
                                         <h4>Name</h4>
			                        	<input type="text" name="name" class="form-password form-control" id="form-password" value="{{ $appointment->dog->name }}" disabled> 
			                        </div>
                                    @else
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">General Comment</label>
                                         <h4>Client name</h4>
			                        	<input type="text" name="name" class="form-password form-control" id="form-password" value="{{ $appointment->user->name }}" disabled> 
			                        </div>
                                    @endif
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">General Comment</label>
                                         <h4>Service</h4>
			                        	<input type="text" name="service" class="form-password form-control" id="form-password" value="{{ $appointment->service }}" disabled> 
			                        </div>
                                    @if($user->client_status == 1)
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Date</label>
                                        <h4>Date</h4>  
			                        	<input type="date" name="date" class="form-username form-control" id="form-username" value= {{ $appointment->date_time }} min=<?php echo date('Y-m-d')?>>
                                    </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Time</label>
                                         <h4>Time</h4>
                                         <select id="schedules" name="schedules">
                                         <option value="{{ $appointment->date_time }}">{{ \Carbon\Carbon::parse($appointment->date_time)->format("H:i") }} </option>
                                         @foreach ($times as $time)
                                         <option value="{{ $time }}"> {{ \Carbon\Carbon::parse($time)->format("H:i") }}</option>
			                             @endforeach
                                        </select>
			                        </div>   
                                    <button type="submit" class="btn">Update</button>
                                    @else
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">General Comment</label>
                                         <h4>Date and Time</h4>
			                        	<input type="text" name="name" class="form-password form-control" id="form-password" value="{{ \Carbon\Carbon::parse($appointment->date_time)->format('d-M-Y H:i') }}" disabled> 
			                        </div>
                                    <div class="form-group">
                                         <h4>Address</h4>
			                        	<input type="text" name="name" class="form-password form-control" id="form-password" value="{{ $appointment->user->address }}" disabled> 
			                        </div>
                                    <div class="form-group">
                                         <h4>Mobile Phone Number</h4>
			                        	<input type="text" name="name" class="form-password form-control" id="form-password" value="{{ $appointment->user->mobile_number }}" disabled> 
			                        </div>
                                    <div class="form-group">
                                         <h4>Dog name</h4>
			                        	<input type="text" name="name" class="form-password form-control" id="form-password" value="{{ $appointment->dog->name }}" disabled> 
			                        </div>
                                    <div class="form-group">
                                         <h4>Dog breed</h4>
			                        	<input type="text" name="name" class="form-password form-control" id="form-password" value="{{ $appointment->dog->breed }}" disabled> 
			                        </div>
                                    <div class="form-group">
                                         <h4>Comment</h4>
			                        	<input type="text" name="name" class="form-password form-control" id="form-password" value="{{ $appointment->comment }}" disabled> 
			                        </div>
                                    @endif     
                                            
                                    
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
                // msg['msg'][0]['date'];  
              //  alert(msg['msg'][0]['date_time']);
                if (len == 0) {
                    alert("No available time left. Please select another date!")
                }
                // alert(msg['msg']);
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