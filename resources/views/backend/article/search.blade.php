@extends('backend.app')

@section('title')
Data Articles
@endsection

@section('content')


@foreach($search as $data)
	<div class="white-box">
		<div class="row">
			<div class="col-md-3">
				<img src="{{ asset('storage/cover/resize/'. $data->cover) }}" alt="{{ $data->cover }}" class="img-responsive">
			</div>
			<div class="col-md-9">
				<a href=""><h1 class="adminh1">{{ $data->title }}</h1></a>
				@foreach(searchSelectedTag($data->id) as $tags)
					<a href="{{ route('tags.search', ['id' => $tags->category_id ]) }}" class="tags">{{ $tags->name }}</a>
				@endforeach
				<br><br>
				<form action="{{ route('article.destroy', ['id' => $data->id ]) }}" method="post">
					@csrf
					@method("DELETE")
					
					<a href="{{ route('article.edit', ['id' => $data->id ]) }}" class="btn btn-sm btn-warning">Edit</a>

					<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus Article?')">Hapus</button>
				</form>
				
			</div>
		</div>
	</div>
@endforeach

{{ $search->links() }}

@endsection



