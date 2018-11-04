@extends('backend.app')

@section('title')
Add Article
@endsection

@section('content')

<div class="white-box">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control">	
				</div>
				<div class="form-group">
					<label for="title">Tags</label>
					<input type="text" class="form-control" id="input-draggable">	
				</div>
				
			</form>
		</div>
	</div>
</div>


@endsection

@push('scripts')

<script>
	$('#input-draggable').selectize({
	    plugins: ['drag_drop'],
	    delimiter: ',',
	    persist: false,
	    create: function(input) {
	        return {
	            value: input,
	            text: input
	        }
	    }
	});
</script>

@endpush