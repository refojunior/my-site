@extends('backend.app')

@section('title')
Search Tags 
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Search For Category : <b style="color:red"> {{ $category->name }} </b></h2>
	</div>
</div>

@foreach($tag as $search)
<div class="white-box">
	<div class="row">
		<div class="col-md-3">
			<img src="{{ asset('storage/cover/resize/'. $search->cover) }}" alt="{{ $search->cover }}" class="img-responsive">
		</div>
		<div class="col-md-9">
			<a href=""><h1 class="adminh1">{{ $search->title }}</h1></a>
			@foreach(searchSelectedTag($search->article_id) as $tags)
				<a href="{{ route('tags.search', ['id' => $tags->category_id ]) }}" class="tags">{{ $tags->name }}</a>
			@endforeach
			<br><br>
			<a href="{{ route('article.edit', ['id' => $search->article_id ]) }}" class="btn btn-sm btn-warning">Edit</a>
			<a href="" class="btn btn-sm btn-danger">Hapus</a>
		</div>
	</div>	
</div>
@endforeach

{{ $tag->links() }}


@endsection