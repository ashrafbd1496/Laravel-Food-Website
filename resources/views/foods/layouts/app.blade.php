<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    @include('foods.layouts.head')
    
</head>
<body>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p>ContacUst@Gmail.com</p></li>
				<li class="phone"><p>08 88888 88888</p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="{{asset('assets/images/logo.png')}}"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center">Truely the best restaurant in town - The New York Times</h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
			<li class="colour-1"><a href="index.html">Home</a></li>
			<li class="colour-2"><a href="menu.html">Menu</a></li>
			<li class="colour-3"><a href="location.html">Location</a></li>
			<li class="colour-4"><a href="archive.html">Blog</a></li>
			<li class="colour-5"><a href="reservation.html">Reservation</a></li>
			<li class="colour-6"><a href="staff.html">Our Staff</a></li>
			<li class="colour-7"><a href="news.html">News</a></li>
			<li class="colour-8"><a href="gallery.html">Gallery</a></li>
		</ul>
    </nav>


    @section('main-content')
    @show

    @include('foods.layouts.footer')


	<!-- js -->
	<script src="{{asset('assets/js/classie.js')}}"></script>
	<script src="{{asset('assets/js/demo.js')}}"></script>
	
</div>
</body>
</html>