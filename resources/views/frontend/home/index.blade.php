@extends('frontend.app')

@section('frontend-title')
Welcome 
@endsection

@section('description')
	
@section('content')

<header class="masthead" >
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-lg-12 my-auto">
				<div class="header-content">
					<h1>Welcome to My Site</h1>
					<hr>
					<p class="text-box">Hello my name is Refo Junior, i'm a website developer based in Denpasar, Bali. I'm a Student at STMIK STIKOM Bali. I really love to make a website and other software engineering, because this is my passion. </p>
				</div>
			</div>
			
		</div>
	</div>
</header>

<!-- service section -->
<section id="service" >
	<div class="container"  >
		<div class="row">
			<div class="col-md-4 mx-auto i-do-section" align="center">
				<h1>What I do?</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" align="center">
				<span class="fa-stack fa-5x">
	              <i class="fas fa-circle fa-stack-2x text-danger"></i>
	              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
	            </span>
	            <h3 class="service">Website Development</h3>
	            <p>I can create a website, whether it's an application, company profile, business, personal, e-commerce and others</p>
			</div>
			<div class="col-md-4" align="center">
				<span class="fa-stack fa-5x">
	              <i class="fas fa-circle fa-stack-2x text-danger"></i>
	              <i class="fas fa-mobile-alt fa-stack-1x fa-inverse"></i>
	            </span>
	             <h3 class="service">Responsive Design</h3>
	             <p>I created a website with a responsive design, so your website still looks perfect even though it's accessed via mobile phone</p>
			</div>
			<div class="col-md-4" align="center">
				<span class="fa-stack fa-5x">
	              <i class="fas fa-circle fa-stack-2x text-danger"></i>
	              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
	            </span>
	             <h3 class="service">Cheap Price</h3>
	             <p>With prices that are in accordance with the mutual agreement, I will definitely give the best price for you</p>
			</div>
		</div>
	</div>
</section>

<div class="breaker"></div>

<!-- skills section -->
<section>
	<div class="skills">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto i-do-section" align="center">
					<h1>My Skills</h1>
					<p style="color:white">I'm often using Codeigniter, Laravel, Bootstrap, jQuery and others to my projects</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="content-service">
						<h2>HTML</h2>
						<div class="progress">
						 	<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
						</div>
					</div>
					
					<div class="content-service">
						<h2>CSS</h2>
						<div class="progress">
						 	<div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div>
					</div>

					<div class="content-service">
						<h2>Javascript</h2>
						<div class="progress">
						 	<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="content-service">
						<h2>PHP</h2>
						<div class="progress">
						 	<div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
						</div>
					</div>

					<div class="content-service">
						<h2>MySql</h2>
						<div class="progress">
						 	<div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
						</div>
					</div>

					<div class="content-service">
						<h2>Ajax</h2>
						<div class="progress">
						 	<div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br>
			
		</div>
	</div>		
</section>

<!-- portfolio section -->
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto i-do-section" align="center">
				<h1>My Portfolio</h1>
				<p>Not only that, I also contributed to many other projects related to the website development</p>
			</div>
		</div>
		<div class="row">

			<div class="col-md-4 portfolio-item">
				<a href="#" class="portfolio-link">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fas fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" alt="portfolio1" src="img/port-cwa.jpg">
				</a>
				<div class="portfolio-caption">
					<h2>PT. Citra Warna</h2>
					<p class="text-muted">Website Company</p>
				</div>
			</div>

			<div class="col-md-4 portfolio-item">
				<a href="#" class="portfolio-link">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fas fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" alt="portfolio1" src="img/port-bms.jpg">
				</a>
				<div class="portfolio-caption">
					<h2>Bali Massive Shuffle</h2>
					<p class="text-muted">Website Profile Community</p>
				</div>
			</div>

			<div class="col-md-4 portfolio-item">
				<a href="#" class="portfolio-link">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fas fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" alt="portfolio1" src="img/port-miae.jpg">
				</a>
				<div class="portfolio-caption">
					<h2>Miae App</h2>
					<p class="text-muted">Website Application</p>
				</div>
			</div>
		</div>
		<br>
		{{-- <div class="row">
			<div class="col-md-3 mx-auto" align="center">
				<button class="btn btn-block btn-outline-danger">See More</button>
			</div>
		</div> --}}
	</div>
</section>
<br><br>
<!-- article section -->
<section id="article">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto i-do-section" align="center">
				<h1>My Recent Articles</h1>
			</div>
		</div>
		<div class="row">
			@foreach($articles as $row)
	        <div class="col-md-4">
	        	<div class="content-article">
	        		<img src="{{ asset('storage/cover/resize/'.$row->cover) }}" alt="{{ $row->cover }}" class="img-fluid my-thumbnail">
	        		<div class="caption-article">
	        			<h2>
	        				<a href="{{ route('articles.read', ['title' => linkTitle($row->title) ]) }}" class="link-article">{{ $row->title }}
	        				</a>
	        			</h2>
	        			<p class="text-muted text-ket">
	        				<i class="fa fa-calendar-alt"></i> : {{ $row->created_at }} &nbsp; 
	        				<i class="fa fa-user"></i> <a href="https://instagram.com/refo_junior" target="_blank"> @refo_junior </a>
	        			</p>
	        			<hr>
	        			<p>{{ substr($row->excerpt, 0, 160) }} 
	        				<a href="{{ route('articles.read', ['title' => linkTitle($row->title) ]) }}">[Read More]</a> 
	        			</p>
	        			<br>
	        		</div>
	        	</div>
	        </div>
	        @endforeach
	        
			
		</div>
		<br>
		<div class="row">
			<div class="col-md-3 mx-auto" align="center">
				<a class="btn btn-block btn-outline-danger" href="{{ route('articles') }}">See More</a>
			</div>
		</div>
		<br><br>
	</div>
</section>

<!--  -->
<section class="invited">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="">
					<h1>Have Some Interesting Project?</h1>
				</div>
				
			</div>
		</div>
	</div>
</section>
<br>

@endsection

<!-- nampilin form contact -->
@push('contact')

@include('frontend.contact')

@endpush