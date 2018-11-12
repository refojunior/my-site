@extends('frontend.app')

@section('frontend-title')
Search Article
@endsection

@push('style_navbar')
<?= styleNavbar() ?>
@endpush

@section('content')

<section>
	<div class="cover-page-article">
		<div class="container">
			<div class="row justify-content-center">
				<h1 class="title-page">&nbsp; Search Articles : {{ $keywords }} &nbsp;</h1>
			</div>
		</div>
	</div>
</section>

<section id="article">
	<div class="container">
		<br><br>
		<div class="row">
			@foreach($articles as $article)
	        <div class="col-md-4">
	        	<div class="content-article">
	        		<img src="{{ asset('storage/cover/resize/'.$article->cover) }}" alt="{{ $article->cover }}" class="img-fluid my-thumbnail">
	        		<div class="caption-article">
	        			<h2>
	        				<a href="{{ route('articles.read', ['title' => linkTitle($article->title) ]) }}" class="link-article">{{ $article->title }}
	        				</a>
	        			</h2>
	        			<p class="text-muted text-ket">
	        				<i class="fa fa-calendar-alt"></i> : {{ $article->created_at }} &nbsp; 
	        				<i class="fa fa-user"></i> <a href="https://instagram.com/refo_junior" target="_blank"> @refo_junior </a>
	        			</p>
	        			<hr>
	        			<p>{{ substr($article->excerpt, 0, 160) }} 
	        				<a href="{{ route('articles.read', ['title' => linkTitle($article->title) ]) }}">[Read More]</a> 
	        			</p>
	        			<br>
	        		</div>
	        	</div>
	        </div>
	        @endforeach
		</div>
		<br>
		<div class="row">
			<div class="container">
				<div class="d-flex justify-content-center">
					{{ $articles->links() }}
				</div>
				
			</div>
		</div>
		<br>
	</div>
</section>

@endsection