@extends('backend.app')

@section('title')
{{ $read->title }}
@endsection

@section('content')
<div class="white-box">
	<div class="row">
		<div class="col-md-12">
			<h1 align="center">{{ $read->title }}</h1>
			<p class="text-muted" align="center"> {{ $read->date }} </p>
			<div align="center" style="margin-top:15px; margin-bottom:15px">
				<img src="{{ asset('storage/cover/'. $read->cover) }}" alt="{{ $read->cover }}" class="img-responsive">
			</div>
			<?= $read->content ?>

			<strong>Tags : </strong>
			@foreach(searchSelectedTag($read->id) as $tags)
				<a href="{{ route('tags.search', ['id' => $tags->category_id ]) }}" class="tags">{{ $tags->name }}</a>
			@endforeach
		</div>
	</div>

</div>
@endsection