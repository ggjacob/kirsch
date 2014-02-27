@extends('layout')
@section('content')




	<div id='heading'>
		<h1>M. Lee Kirsch, M.D</h1>
		<p class='title'>Plastic & Reconstructive Surgery</br>336-760-4783</p>
		<img id='logo' src='logo.png'>

		<nav>
			<ul>
				<li><a href="users">Home</a></li>
				<li><a id='nav-face' href="#">Face</a></li>
				<li><a id='nav-body' href="#">Body</a></li>
				<li><a id='nav-breast' href="#">Breast</a></li>
				<li><a id='nav-kirsch' href="#">Dr. Kirsch</a></li>
				<li><a id='nav-questions' href="#">Questions</a></li>
				<li><a id='nav-contact' href="#">Contact Us</a></li>
				<li><a id='nav-news' href="#">News and Media</a></li>
				<li><a id='nav-photos' href="#">photos</a></li>	
			</ul>
		</nav>
	</div>

@include('nav-text')

@stop