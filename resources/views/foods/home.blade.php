@extends('foods.layouts.app')


@section('main-content')

<div class="zerogrid">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li id="callbacks1_s0" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;">
					<img src="assets/images/banner1.jpg" alt="">
					<div class="caption">
						<h2>We've got the best spareribs in town.</h2><br>
						<p>Nulla eget mauris quis elit mollis ornare vitae ut odio. Cras tincidunt, augue vitae sollicitudin commodo,quam elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia nisl. </p>
					</div>
				</li>
				<li id="callbacks1_s1" class="callbacks1_on" style="float: left; position: relative; opacity: 1; z-index: 2; display: list-item; transition: opacity 500ms ease-in-out 0s;">
					<img src="assets/images/banner2.jpg" alt="">
					<div class="caption">
						<h2>If food is an experience, then you'll find it at the restaurant.</h2><br>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
				</li>
				<li id="callbacks1_s2" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out 0s;">
					<img src="assets/images/banner3.jpg" alt="">
					<div class="caption">
						<h2>Enjoy our take-away menu.</h2><br>
						<p>At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
					</div>
				</li>
			</ul>
		</div>
	</div>

<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2>“Your awesome company slogan goes here, we have the best food around”</h2>
					<span>Unc elementum lacus in gravida pellentesque urna dolor eleifend felis eleifend</span>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2>Welcome</h2>
						<hr class="line">
						<span>text text text text text</span>
					</div>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Menu Card<b></b></span>
									<img src="assets/images/menu.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Fast Food<b></b></span>
									<img src="assets/images/fast-food.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Reservation<b></b></span>
									<img src="assets/images/reservation.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Chef<b></b></span>
									<img src="assets/images/chef.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Preview<b></b></span>
									<img src="assets/images/preview.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="box-item">
									<span class="ribbon">Text Heading<b></b></span>
									<img src="assets/images/reservation.jpg" alt="">
									<p>The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!</p>
									<a href="#" class="button button-1">Detail</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

@endsection