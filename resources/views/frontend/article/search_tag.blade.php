@extends('frontend.app')

@section('frontend-title')
Search Tag
@endsection

@push('style_navbar')
<?= styleNavbar() ?>
@endpush

@section('content')

<section>
	<div class="cover-page-article">
		<div class="container">
			<div class="row justify-content-center">
				<h1 class="title-page"> &nbsp; Article Tag : {{ $category->name }} &nbsp;</h1>	
			</div>
		</div>
	</div>
</section>

<section id="article">
	<div class="container">
		<br><br>
		<div class="row">
			@foreach($tag as $articles)
			<div class="col-md-4">
				<div class="content-article">
					<img src="{{ asset('storage/cover/resize/'.$articles->cover) }}" alt="{{ $articles->cover }}" class="img-fluid my-thumbnail">
					<div class="caption-article">
	        			<h2>
	        				<a href="{{ route('articles.read', ['title' => linkTitle($articles->title) ]) }}" class="link-article">{{ $articles->title }}
	        				</a>
	        			</h2>
	        			<p class="text-muted text-ket">
	        				<i class="fa fa-calendar-alt"></i> : {{ $articles->created_at }} &nbsp; 
	        				<i class="fa fa-user"></i> <a href="https://instagram.com/refo_junior" target="_blank"> @refo_junior </a>
	        			</p>
	        			<hr>
	        			<p>{{ substr($articles->excerpt, 0, 160) }} 
	        				<a href="{{ route('articles.read', ['title' => linkTitle($articles->title) ]) }}">[Read More]</a> 
	        			</p>
	        			<br>
		        	</div>
				</div>
				
			</div>
			
			@endforeach
		</div>
	</div>
	<br>
</section>

@endsection