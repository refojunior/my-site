@extends('backend.app')

@section('title')
Edit Article
@endsection

@section('content')

<div class="white-box">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('article.update', ['id' => $article->id ]) }}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<input type="hidden" name="date" value="{{ $article->date }}">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" value="{{ $article->title }}">	
				</div>
				<div class="form-group">
					<label for="tags">Tags</label>
					<select class="form-control" id="tags" name="tags[]" multiple="multiple" required>
						@foreach($categories as $option)
							<option value="{{ $option->id }}" {{ checkSelected($option->id, $article->id) }}>{{ $option->name }}</option>
						@endforeach
					</select>	
				</div>
				<div class="form-group">
					<label for="keywords">Keywords</label>
					<input type="text" class="form-control" name="keywords" value="{{ $article->keywords }}">
				</div>
				<div class="form-group">
					<label for="keywords">Excerpt</label>
					<textarea name="excerpt" class="form-control">{{ $article->excerpt }}</textarea>
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" class="form-control" id="content">{{ $article->content }}</textarea>
				</div>
				<div class="form-group">
					<label for="cover">Cover</label>
					<input type="file" class="form-control" name="cover" value="{{ $article->cover }}">
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

  var editor_config = {
    path_absolute : "/",
    selector: "#content",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    },
    image_class_list: [
        { title: "Responsive", value: "img-fluid img-content" }
    ], 
  };

  tinymce.init(editor_config);
</script>

@endpush