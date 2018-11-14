@if(isset($article->title))

@extends('frontend.app')

@section('frontend-title')
{{ $article->title }}
@endsection

@push('style_navbar')
<?= styleNavbar() ?>
@endpush

@section('content')

<section id="article">
	<div class="body-read-article">
		<div class="container">
			<!-- TITLE -->
			<div class="row">
				<div class="col-md-12">
					<h1>{{ $article->title }}</h1>
					<p class="text-muted"> 
						<i class="fa fa-calendar-alt"></i> : {{ $article->created_at }} &nbsp; 
	        			<i class="fa fa-user"></i> <a href="https://instagram.com/refo_junior" target="_blank"> @refo_junior </a> 
	        		</p>
				</div>
			</div>

			<!-- CONTENT -->
			<div class="row">
				<div class="col-md-8" id="col-width">
					<div class="row">
						<div class="col-md-12">
							<img src="{{ asset('storage/cover/'.$article->cover) }}" alt="{{ $article->cover }}" class="img-fluid" style="width: 100%">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<?= $article->content ?>
							<strong>Tags :</strong>
							@foreach(searchSelectedTag($article->id) as $tags)
								<a href="{{ route('articles.tag', ['id' => $tags->category_id ]) }}" class="tags">{{ $tags->name }}</a>
							@endforeach
						</div>
					</div>
					<br>
				</div>
				<!-- ARTIKEL MENU KANAN -->
				<div class="col-md-4" id="right-menu">
					<div class="row">
						<div class="col-md-12">
							<h2>Artikel Terbaru : </h2>
						</div>
					</div>
					
					@foreach($articles as $row)
					<div class="row right-menu">
						<div class="col-md-5">
							<a href="{{ route('articles.read', ['title' => linkTitle($row->title) ]) }}" class="thumbs-link">
								<img src="{{ asset('storage/cover/thumbnail/'.$row->cover) }}" alt="Covers" class="img-fluid thumbs-image">
							</a>
						</div>
						<div class="col-md-7">
							<div class="text-muted thumbs-date">{{ $row->created_at }} </div>
							<a href="{{ route('articles.read', ['title' => linkTitle($row->title) ]) }}" class="thumbs-link"><p class="thumbs-title" style="font-size:15px">{{ substr($row->title, 0, 50) }} ...</p></a>
						</div>
					</div>
					@endforeach
				</div>
			</div>


		</div>
	</div>
</section>

<!-- COMMENT -->
<section>
	<div class="container">
		<div class="row">
		<div class="col-md-8">
				<div id="disqus_thread"></div>
					<script>
					(function() { // DON'T EDIT BELOW THIS LINE
					var d = document, s = d.createElement('script');
					s.src = 'https://refojunior.disqus.com/embed.js';
					s.setAttribute('data-timestamp', +new Date());
					(d.head || d.body).appendChild(s);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>
		</div>
	</div>
</section>

<section id="article">
	<div class="container" >
		<br><br>
		<div class="row">
			<div class="col-md-12">
				<h2>Baca Juga</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			@foreach($random as $randArticle)
			<div class="col-md-4">
	        	<a href="{{ route('articles.read', ['title' => linkTitle($randArticle->title) ]) }}" class="thumbs-link">
					<img src="{{ asset('storage/cover/resize/'.$randArticle->cover) }}" alt="{{ $randArticle->cover }}" class="img-fluid my-thumbnail" style="margin-bottom: 0">
				</a>
	        	<div class="bottom-caption">
	        		<span class="bottom-category">{{ $randArticle->created_at }}</span>
	        		<div class="bottom-title">
		        		<a href="{{ route('articles.read', ['title' => linkTitle($randArticle->title) ]) }}" class="thumbs-link"><p class="thumbs-title" style="font-size:15px">{{ $randArticle->title }}</p></a>
		        	</div><br>
	        	</div>
        	</div>
        	@endforeach
		</div>
	</div>
	
</section>

@endsection


@push('scripts')
<script>
//hidden element when size small
var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var rightMenu = document.getElementById("right-menu");
var col = document.getElementById("col-width");
if(width < 992) {
  rightMenu.style.display = "none";
  col.classList.remove("col-md-8");
  col.classList.add("col-md-12");
}

</script>

@endpush

@endif

