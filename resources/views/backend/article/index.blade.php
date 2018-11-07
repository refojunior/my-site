@extends('backend.app')

@section('title')
Data Articles
@endsection

@section('content')

<div class="row">
    <div class="col-md-12"><a href="{{ route('article.create') }}" class="btn btn-sm btn-primary">Add Articles</a></div>
</div>
<br>

@foreach($articles as $data)
	<div class="white-box">
		<div class="row">
			<div class="col-md-3">
				<img src="{{ asset('storage/cover/resize/'. $data->cover) }}" alt="{{ $data->cover }}" class="img-responsive">
			</div>
			<div class="col-md-9">
				<a href=""><h1 class="adminh1">{{ $data->title }}</h1></a>
				@foreach(searchSelectedTag($data->id) as $tags)
					<a href="#" class="tags">{{ $tags->name }}</a>
				@endforeach
				<br><br>
				<a href="" class="btn btn-sm btn-info">View</a>
				<a href="{{ route('article.edit', ['id' => $data->id ]) }}" class="btn btn-sm btn-warning">Edit</a>
				<a href="" class="btn btn-sm btn-danger">Hapus</a>
			</div>
		</div>
	</div>
@endforeach

@endsection



