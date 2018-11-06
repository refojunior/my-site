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

				<a href="#" class="tags">Programming</a><a href="#" class="tags">Javascript</a><a href="#" class="tags">Tips</a>
				<br><br>
				<a href="" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
				<a href="" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a>
				<a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
			</div>
		</div>
	</div>
@endforeach

@endsection

