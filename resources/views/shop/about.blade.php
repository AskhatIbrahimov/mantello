@extends('layouts.shop', ['page_title' => 'About'])

@section('content')
<!-- breadcrumbs area start -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-inner">
					<ul>
						<li class="home">
							<a href="index.html">Home</a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="category3"><span>About</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs area end -->
<!-- hello about start -->
<div class="home-hello-info">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="f-title text-center">
					<h3 class="title text-uppercase">About Us</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="about-page-cntent">
					<h3>The standard lorem ipsum passage</h3>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
					<blockquote>
						<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
					</blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
				</div>
			</div>
			<div class="col-md-5 col-sm-12 col-xs-12">
				<div class="img-element">
					<img src="{{asset('plugins/lavoro/img/about/about.jpg')}}" alt="banner1">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- hello about end -->
@endsection