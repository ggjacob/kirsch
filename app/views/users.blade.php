@extends('layout')
@section('content')




	<div id='heading'>
		<h1>M. Lee Kirsch, M.D</h1>
		<p class='title'>Plastic & Reconstructive Surgery</br>336-760-4783</p>
		<img id='logo' src='logo.png'>
		</div>
		<nav>
			<ul>
				<li><a href="users">Home</a></li>
				<li><a id='nav-procedures' href="#">Procedures</a></li>
				<li><a id='nav-kirsch' href="#">Dr. Kirsch</a></li>
				<li><a id='nav-questions' href="#">Questions</a></li>
				<li><a id='nav-news' href="#">News</a></li>
				<li><a id='nav-photos' href="#">photos</a></li>	
				<li><a id='nav-contact' href="#">Contact Us</a></li>				
			</ul>
		</nav>


@include('nav-text')

@stop