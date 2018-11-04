@extends('backend.app')

@section('title')
Add Article
@endsection

@section('content')

<div class="white-box">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" value="{{ old('title') }}">	
				</div>
				<div class="form-group">
					<label for="tags">Tags</label>
					<select class="form-control" id="tags" name="tags[]" multiple="multiple">
						@foreach($categories as $tags)
						<option value="{{ $tags->id }}">{{ $tags->name }}</option>
						@endforeach
					</select>	
				</div>
				<div class="form-group">
					<label for="keywords">Keywords</label>
					<input type="text" class="form-control" name="keywords" value="{{ old('keywords') }}">
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="cover">Cover</label>
					<input type="file" class="form-control" name="cover" value="{{ old('cover') }}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-lg btn-success">Post</button>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection

@push('scripts')

<script>
	$(document).ready(function() {
	    $('#tags').select2();
	});
</script>

@endpush