@extends('layouts.master')

@section('content')

   <!-- Header section -->
   <header class="header-section">
	<div class="logo">
		@foreach ($header as $item)
			<img src="{{asset("storage/".$item->logo)}}" height="40px" alt="">
			@endforeach <!-- Logo -->
	</div>
	<!-- Navigation -->
	<div class="responsive"><i class="fa fa-bars"></i></div>
	<nav>
		<ul class="menu-list">
			<li><a href="{{route('index')}}">Home</a></li>
			<li class="active"><a href="{{route('services.index')}}">Services</a></li>
			<li><a href="{{route('blog.index')}}">Blog</a></li>
			<li><a href="{{route('contact.index')}}">Contact</a></li>
			<li><a href="{{route('home')}}">Login</a></li>
		</ul>
	</nav>
</header>
<!-- Header section end -->


<!-- Page header -->
<div class="page-top-section">
	<div class="overlay"></div>
	<div class="container text-right">
		<div class="page-info">
			<h2>Services</h2>
			<div class="page-links">
				<a href="{{route('index')}}">Home</a>
				<span>Services</span>
			</div>
		</div>
	</div>
</div>
<!-- Page header end-->

	<!-- services section-->
@include('components.seeServ')
	<!-- services section end -->


	<!-- features section -->
	<div class="team-section spad" id="services">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  discover the world</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($features as $item)
                    <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->texteCourt}}</p>
                        </div>
                        <div class="icon">
                            <i class="{{$item->logo}}"></i>
                        </div>
                    </div>
                    @endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($features as $item)
                    <div class="icon-box light">
						<div class="icon">
							<i class="{{$item->logo}}"></i>
						</div>
                        <div class="service-text">
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->texteCourt}}</p>
                        </div>
                    </div>
                    @endforeach
			</div>
			</div>
			<div class="text-center mt100">
				<a href="#ServiceCard" class="site-btn js-scrollTo">Browse</a>		
				</div>
		</div>
	</div>
	<!-- features section end-->


	<!-- services card section-->
	<div class="services-card-section spad" id="ServiceCard">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-1.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- Single Card -->
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-2.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- Single Card -->
				<div class="col-md-4 col-sm-12">
					<div class="sv-card">
						<div class="card-img">
							<img src="img/card-3.jpg" alt="">
						</div>
						<div class="card-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- services card section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad" id="news">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form action="{{route('newsletter.store')}}" class="nl-form" method="POST">
						@csrf
						@if (session()->has('news'))
						<div class="alert alert-success" role="alert">
							{{session('news')}}
						</div>
						@endif
							<input name="mail" type="text" placeholder="Your e-mail here">
							<button class="site-btn btn-2">Newsletter</button>
						</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->
	



    @include('components.form')
    @include('components.footer')

@endsection