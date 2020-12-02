@extends('foods.layouts.app')


@section('main-content')

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="location.html">Location</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div class="wrap-content">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<h3>Address</h3>
							<p>1051 Nipomo St San Luis Obispo, CA 93401</p><br>
							<h3>Hours Of Operation</h3>
							<p><span>MONDAY-FRIDAY: </span>8am-6pm</p>
							<p><span>SATURDAY-SUNDAY: </span>8am-10pm</p><br>
							<h3>Contact Info</h3>
							<p><span>EMAIL ADDRESS: </span>contact@mycuisine.com</p>
							<p><span>TELEPHONE: </span>343-233-5533</p>
							<p><span>FAX: </span>432-456-6642</p>
						</div>
					</div>
					<div class="col-2-3">
						<div class="wrap-col">
							<div class="wrap-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="380" frameborder="0" style="border:0"></iframe></div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>

@endsection