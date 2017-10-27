<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/material-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
	<div id="app">
		@guest
			@yield('content')
	@else
	<div class="wrapper">
		<nav class="teal">
			<div class="nav-wrapper">
				<!-- Fixed toggle  -->
				<a href="#" id="sidebar-large-toggle" class="sidebar-toggle top-nav waves-effect waves-light only-on-large">
					<i class="material-icons">menu</i>
				</a>
				
				<!-- Mobile toggle -->
				<a href="#" data-activates="sidebar" class="sidebar-toggle button-collapse top-nav waves-effect waves-light only-on-small">
					<i class="material-icons">menu</i>
				</a>
				<a href="{{ url('/') }}" class="brand-logo">{{ Lang::get('app.app_name') }}</a>
				@foreach($breadcrumbs as $breadcrumb)
					<a href="{{ url('/') }}" class="brand-logo">{{ Lang::get('app.app_name') }}</a>
				@endforeach
			</div>
		</nav>
			@yield('content')
		</div>
		<ul id="sidebar" class="side-nav fixed">
			<li>
				<div class="user-view">
					<div class="background">
						<img src="{{ asset('images/bg/wall26.jpg') }}">
					</div>
					<a href="#!user"><img class="circle" src="{{ asset('images/user/admin.jpg') }}"></a>
					<a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
					<a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
				</div>
			</li>
			<li><a href="{{ url('/') }}"><i class="material-icons">home</i>{{ Lang::get('app.dashboard') }}</a></li>
			<li><a href="{{ url('product') }}"><i class="material-icons">swap_vertical_circle</i>{{ Lang::get('app.product_info') }}</a></li>
			<li><a href="{{ url('users') }}"><i class="material-icons">group</i>{{ Lang::get('app.users') }}</a></li>
			<li><a href="#!">Second Link</a></li>
			<li><div class="divider"></div></li>
			<li><a class="subheader">Subheader</a></li>
			<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
			<li>
				<a href="{{ route('logout') }}" class="waves-effect" onclick="logout()">{{ Lang::get('auth.logout') }}</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</li>
		</ul>
		@endguest
	</div>
	<!-- Scripts -->
	<script src="{{ asset('js/materialize.min.js') }}"></script>
</body>
</html>
<script>
	function logout() {
		event.preventDefault();
		document.getElementById('logout-form').submit();
	}

	$(document).ready(function($) {
		$(".button-collapse").sideNav({
			menuWidth: 300,
			edge: 'left',
			closeOnClick: true,
			draggable: true,
			onOpen: function(el) { /* Do Stuff */ },
			onClose: function(el) { /* Do Stuff */ },
		});

		var wrapper = $('.wrapper');
		var sidenav = $('#sidebar');

		$('#sidebar-large-toggle').click(function(event) {
			sidenav.addClass('velocity-animating');
			if(wrapper.hasClass('full')){
				wrapper.removeClass('full');
				sidenav.css('transform', 'translateX(0)');
			}
			else{
				wrapper.addClass('full');
				sidenav.css('transform', 'translateX(-300px)');
			}
		});
	});
</script>