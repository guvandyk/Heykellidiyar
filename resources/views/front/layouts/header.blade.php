<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="takyk" content="Creative Studio"/>

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:300,400,500,600,700|Merriweather:300,400,300i,400i&display=swap" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="{{asset('front/')}}/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/css/style.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/css/magnific-popup.css" type="text/css" />
	<!-- Function and Fonts-->
		<link rel="stylesheet" href="{{asset('front/')}}/css/function.css" type="text/css" />
		<link rel="stylesheet" href="{{asset('front/')}}/css/custom-fonts.css" type="text/css" />
	<!-- / -->
<link rel="shortcut icon" type="image/png" href="{{asset('front/')}}/images/logo/Header-logo.png"/>

	<link rel="stylesheet" href="{{asset('front/')}}/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	@toastr_css

	{{-- slider --}}
<link rel="stylesheet" href="{{asset('front/')}}/include/css/settings.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/include/css/layers.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/include/css/navigation.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/include/css/revolution.addon.beforeafter.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/')}}/include/css/revolution.addon.particles.css" type="text/css" />
	
	<style>

		.demos-filter {
			margin: 0;
			text-align: right;
		}

		.demos-filter li {
			list-style: none;
			margin: 10px 0px;
		}

		.demos-filter li a {
			display: block;
			border: 0;
			text-transform: uppercase;
			letter-spacing: 1px;
			color: #444;
		}

		.demos-filter li a:hover,
		.demos-filter li.activeFilter a { color: #1ABC9C; }

		@media (max-width: 991px) {
			.demos-filter { text-align: center; }

			.demos-filter li {
				float: left;
				width: 33.3%;
				padding: 0 20px;
			}
		}

		@media (max-width: 767px) { .demos-filter li { width: 50%; } }

		.tiny_bullet_slider .tp-bullet:before {
			content:" ";
			position:absolute;
			width:100%;
			height:25px;
			top:-12px;
			left:0px;
			background:transparent
		}
		#rev_slider_29_1 .uranus.tparrows {
			width:50px;
			height:50px;
			background:rgba(255,255,255,0);
		}
		#rev_slider_29_1 .uranus.tparrows:before {
			width:50px;
			height:50px;
			line-height:50px;
			font-size:40px;
			transition:all 0.3s;
			-webkit-transition:all 0.3s;
		}
		#rev_slider_29_1 .uranus.tparrows:hover:before { opacity:0.75; }
		.bullet-bar.tp-bullets{}.bullet-bar.tp-bullets:before {
			content:" ";
			position:absolute;
			width:100%;
			height:100%;
			background:transparent;
			padding:10px;
			margin-left:-10px;
			margin-top:-10px;
			box-sizing:content-box;
		}
		.bullet-bar .tp-bullet {
			width:60px;
			height:3px;
			position:absolute;
			background:#aaa;
			background:rgba(204,204,204,0.5);
			cursor:pointer;
			box-sizing:content-box;
		}
		.bullet-bar .tp-bullet:hover,.bullet-bar .tp-bullet.selected { background:rgba(204,204,204,1); }

	</style>
	

	<!-- <link rel="stylesheet" href="css/colors.php?color=000000" type="text/css" /> -->

	<!-- Document Title
	============================================= -->
	<title>Heykeli yollar</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header no-sticky" data-menu-padding="30">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row align-items-lg-stretch">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="{{route('home')}}" class="standard-logo"><img src="{{asset('front/')}}/images/logo/Header-logo.png"  class="p-3"></a>

							<a href="{{route('home')}}" class="retina-logo" data-dark-logo="images/logo/Header-logo.png"><img src="{{asset('front/')}}/images/logo/Header-logo.png"  style="max-height: 60px; !important"></a>
							
						</div><!-- #logo end -->

						<div class="header-misc align-items-lg-stretch">			
							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

							<!-- Languages-->
							<div class="header-misc-icon">
								<a href="{{ route('language', 'tm') }}"><h5>TM</h5></a>
							</div>

							<div class="header-misc-icon">
								<a href="{{ route('language', 'ru') }}"><h5>Ru</h5></a>
							</div>

							<div class="header-misc-icon">
								<a href="{{ route('language', 'en') }}"><h5>En</h5></a>
							</div>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu style-ecommerce menu-spacing-margin">

							<ul class="menu-container">
							<li class="menu-item"><a class="menu-link" href="{{route('home')}}"><div>{{$menus[0]->MenuName()}}</div></a></li>
							<li class="menu-item "><a class="menu-link" href="{{route('works')}}"><div>{{$menus[1]->MenuName()}}</div></a></li>
							<li class="menu-item"><a class="menu-link" href="{{route('product')}}"><div>{{$menus[2]->MenuName()}}</div></a></li>
							<li class="menu-item"><a class="menu-link" href="{{route('partners')}}"><div>{{$menus[3]->MenuName()}}</div></a></li>
							<li class="menu-item"><a class="menu-link" href="{{route('contact')}}"><div>{{$menus[4]->MenuName()}}</div></a></li>
							</ul>
						</nav>

						<!-- #primary-menu end -->
						<form class="top-search-form" action="{{ route('search') }}" method="GET">
							<input type="search" name="query" class="form-control" value="" placeholder="@lang('home.Type &amp; Hit Enter..')" autocomplete="off">
						</form>

					</div>
				</div>
			</div>
				<div class="header-wrap-clone"></div>
		</header><!-- #header end -->