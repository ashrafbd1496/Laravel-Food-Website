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
	
	@include('foods.layouts.header')

    @section('main-content')
    @show

    @include('foods.layouts.footer')


	@include('foods.layouts.partials.script')
	
</div>



</body>
</html>