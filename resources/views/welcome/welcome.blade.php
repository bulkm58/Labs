@extends('layouts.master')

@section('content')

<!-- Header section -->
<header class="header-section">
	<div class="logo"><a href="{{route('welcome')}}">
		<img src="img/logo.png"  alt=""><!-- Logo -->
	</a>
	</div>
	<!-- Navigation -->
	<div class="responsive"><i class="fa fa-bars"></i></div>
	<nav>
		<ul class="menu-list">
			<li class="active"><a href="{{route('welcome')}}">Home</a></li>
			<li><a href="{{route('services')}}">Services</a></li>
			<li><a href="{{route('blog')}}">Blog</a></li>
			<li ><a href="{{route('contact')}}">Contact</a></li>
			<li><a href="{{route('home')}}">Login</a></li>
		</ul>
	</nav>
</header>
<!-- Header section end -->


	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="img/big-logo.png" alt="">
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="img/01.jpg"></div>
			<div class="item  hero-item" data-bg="img/02.jpg"></div>
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-023-flask"></i>
							</div>
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-011-compass"></i>
							</div>
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>Get in <span>the Lab</span> and discover the world</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
					</div>
					<div class="col-md-6">
						<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="#testi" class="site-btn js-scrollTo">Browse</a>
					
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left" id="testi">
						<h2>What our clients say</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						<div class="testimonial" >
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/01.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/02.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/01.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/02.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/01.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/02.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>Michael Smith</h2>
									<p>CEO Company</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-023-flask"></i>
						</div>
						<div class="service-text">
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-011-compass"></i>
						</div>
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-037-idea"></i>
						</div>
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-039-vector"></i>
						</div>
						<div class="service-text">
							<h2>Social Media</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-036-brainstorming"></i>
						</div>
						<div class="service-text">
							<h2>Brainstorming</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-026-search"></i>
						</div>
						<div class="service-text">
							<h2>Documented</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-018-laptop-1"></i>
						</div>
						<div class="service-text">
							<h2>Responsive</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-043-sketch"></i>
						</div>
						<div class="service-text">
							<h2>Retina ready</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-012-cube"></i>
						</div>
						<div class="service-text">
							<h2>Ultra modern</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div> 
			</div>
			<div class="text-center">
				<a href="#team" class="site-btn btn-2 js-scrollTo">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad" >
		<div class="overlay"></div>
		<div class="container" id="team">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				<!-- single member -->
				@foreach ($teams as $index=>$user)

            @if ($index==0)
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$user->photo}}" alt="">
                    <h2>{{$user->name}}</h2>
                    <h3>{{$user->role->role}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$CEO->photo}}" alt="">
                    <h2>{{$CEO->name}}</h2>
                    <h3>{{$CEO->role->role}}</h3>
                </div>
            </div>
            @else
             <!-- single member -->
             <div class="col-sm-4">
                <div class="member">
                    <img src="{{'storage/'.$user->photo}}" alt="">
                    <h2>{{$user->name}}</h2>
                    <h3>{{$user->role->role}}</h3>
                </div>
            </div>

            @endif
            @endforeach
				
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="#form" class="site-btn btn-2 js-scrollTo">Browse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Promotion section end-->
    
    @include('components.form')
    @include('components.footer')

    
@endsection