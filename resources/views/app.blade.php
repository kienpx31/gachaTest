<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	<script type="text/javascript" src="{{ asset('/js/jquery-1.11.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.easing.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/storage.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/storage.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/box.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/jquery-ui-1.10.4.custom.min.css.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('/js/jquery-ui-1.10.4.custom.min.js') }}"></script>
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="documenter_sidebar">
		<ol id="documenter_nav">
			<li><a href="{{ url('/') }}">Home</a></li>
			@if (Auth::guest())
			<li><a href="{{ url('/auth/login') }}">Login</a></li>
			<li><a href="{{ url('/auth/register') }}">Register</a></li>
			@else
			<li><a href="">{{ Auth::user()->name }}</a></li>
			<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
			<li><a rel="#tbl_normal">Normal Gacha</a></li>
			<li><a rel="#tbl_expensive">Expensive Gacha</a></li>
			<li><a rel="#tbl_box">Box Gacha</a></li>
			@endif
		</ol>
	</div>
	<div id="showmenu" class="showmenu" type="button"><<</div>
	

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
