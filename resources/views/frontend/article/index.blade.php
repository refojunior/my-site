@extends('frontend.app')

@section('frontend-title')
My Articles
@endsection

@push('style_navbar')
<?= styleNavbar() ?>
@endpush

@section('content')

<section>
	<div class="cover-page-article">
		<div class="container">
			<div class="row justify-content-center">
				<h1 class="title-page">&nbsp; My Articles &nbsp;</h1>
			</div>
		</div>
	</div>
</section>

<section id="article">
	<div class="container">
		<br><br>
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
				<br>
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