<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App Name- @yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){   
			$("button").click(function(){
			    $("div.emdad").animate({
			    	left: '250px',
		            color: 'red',
		            height: '150px',
		            width: '150px',
			    });
			}); 
		});
	</script>
</head>
<body>
	<nav class="navbar navbar-default">
	  	<div class="container">
	    
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			        <li class="active"><a href="{{action('ApplicationForm@application','Home Page')}} ">welcome <span class="sr-only">(current)</span></a></li>
			        <li><a href="{{action('WritersController@show')}} ">Writer Display</a></li>
			        <li><a href="{{action('WritersController@register')}} ">Writers Registration</a></li>
			        <li><a href="{{action('UserhubController@show')}} ">User Hub</a></li>
			        <li><a href="{{action('UserhubController@index')}} ">UserHub Registration</a></li>

			        <li><a href="{{action('DepartmentController@create')}} ">Registration Form</a></li>
			        <li><a href="{{action('DepartmentController@index')}} ">Department</a></li>
			        <li><a href="{{action('ApplicationForm@applicationList','bangla')}} ">Bangla</a></li>
			        <li class="dropdown">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
			          	</ul>
			        </li>
		      	</ul>
		     
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
	
</body>
</html>