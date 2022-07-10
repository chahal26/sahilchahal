@extends('layouts.app')
@section('content')
    <!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">I am Sahil </h1>
							<h5 class="text-uppercase">Full Stack Web Developer</h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="{{ url('/contact') }}"><span>Contact Me</span></a>
								<a class="primary_btn tr-bg" href="{{ url('#aboutme') }}"><span>About Me</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="{{ asset('chahal/img/banner/home-right.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section id="aboutme" class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="{{ asset('chahal/img/about-us.png') }}" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<h2>let’s <br> Introduce about <br> myself</h2>
						<p><strong>Hi I'm Sahil Chahal,</strong> A full-stack web developer with years of expertise who has a track record of working in the information technology and services sector.</p>
                        <p>I build stunning, simple websites that produce useful outcomes. Assisting you with search engine optimization and marketing while guiding you through the design and development phases to ensure the best outcomes.</p>
						<a class="primary_btn" href="{{ url('/contact') }}"><span>Contact Me</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>service offers </h2>
						<p>Having expertise in a variety of front-end and back-end technologies increases my degree of work flexibility.</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<img src="{{ asset('chahal/img/services/s1.png') }}" alt="">
						<h4>UI/UX Design</h4>
						<p>The design is focused on helping users complete tasks quickly with minimum effort.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<img src="{{ asset('chahal/img/services/s2.png') }}" alt="">
						<h4>Web Development</h4>
						<p>Stunning and simple websites are built that produce useful outcomes.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature_item">
						<img src="{{ asset('chahal/img/services/s3.png') }}" alt="">
						<h4>API Development</h4>
						<p>Basic building block of procedures and functions that enable the mobile app development .</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->
@endsection
