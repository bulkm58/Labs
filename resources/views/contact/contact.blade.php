@extends('layouts.master')


@section('content')


	
<!-- Header section -->
<header class="header-section">
	<div class="logo">
		<img src="img/logo.png" alt=""><!-- Logo -->
	</div>
	<!-- Navigation -->
	<div class="responsive"><i class="fa fa-bars"></i></div>
	<nav>
		<ul class="menu-list">
			<li><a href="{{route('welcome')}}">Home</a></li>
			<li><a href="{{route('services')}}">Services</a></li>
			<li><a href="{{route('blog')}}">Blog</a></li>
			<li class="active"><a href="{{route('contact')}}">Contact</a></li>
			<li><a href="{{route('home')}}">Login</a></li>
		</ul>
	</nav>
</header>
<!-- Header section end -->
	


	<!-- Google map -->
	<div class="map" id="map-area"></div>


    @include('components.form')
    @include('components.footer')
    
@endsection