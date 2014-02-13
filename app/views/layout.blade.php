<!DOCTYPE html>
<html>
	<head>
		<title>Dr. Kirsch</title>
		
		{{ HTML::style('css/style.css') }}



		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		
	</head>
	<body style="background-image:url('ws3.jpg');background-repeat: no repeat;background-size:cover;">
		@yield('content')
		@yield('sidebar')
		@yield('nav-text')
	</body>