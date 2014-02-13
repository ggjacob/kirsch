@extends('layout')
@section('content')




	<div id='heading'>
		<!--<img id='ws-pic' src="ws2.jpg">-->
		<h1>M. Lee Kirsch, M.D</h1>
		<p class='title'>Plastic & Reconstructive Surgery</br>336-760-4783</p>
	</div>
		<nav id ='navbar'>
		<ul>
			<li><a href="users">Home</a></li>
			<li><a href="#">Services</a>
				<ul>
					<li><a href="#">Face</a>
						<ul class='subnav'>
							<li><a class='nav-facelift' href='#'>Face Lift</a></li>
							<li><a class='nav-eyelid' href='#'>Eyelid/Blepharoplasty</a></li>
							<li><a class='nav-brow' href='#'>Brow lift</a></li>
							<li><a class='nav-neck' href='#'>Neck Lift</a></li>
							<li><a class='nav-ears' href='#'>Ears</a></li>
							<li><a class='nav-nose' href='#'>Nose/Rhinoplasty</a></li>
						</ul>
					</li>
					<li><a href="#">Body</a>
						<ul>
							<li><a id='nav-tummy' href='#'>Abdomen/Tummy Tuck</a></li>
							<li><a id='nav-lipo' href='#'>Liposuction</a></li>
							<li><a id='nav-thighs' href='#'>Thighs</a></li>
							<li><a id='nav-PWL' href='#'>Post Weight Loss</a></li>
						</ul>
					</li>
					<li><a href="#">Breast</a>
						<ul>
							<li><a id='nav-augmentation' href="#">Breast Augmentation</a></li>
							<li><a id='nav-lift' href="#">Breast Lift</a></li>
							<li><a id='nav-reduction' href="#">Breast Reduction</a></li>
							<li><a id='nav-reconstruction' href="#">Mastectomy Reconstruction</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#">Dr. Kirsch</a>
				<ul>
					<li><a id='nav-education' href="#">Education</a></li>
					<li><a id='nav-experience' href="#">Experience</a></li>
				</ul>
			</li>
			<li><a id='nav-questions' href="#">Questions</a></li>
			<li><a id='nav-contact' href="#">Contact Us</a></li>
			<li><a id='nav-news' href="#">News and Media</a></li>
			<li><a id='nav-photos' href="#">photos</a></li>

		</ul>
		</nav>


@include('nav-text')



@stop