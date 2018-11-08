@extends('backend.app')

@section('title')
Add Article
@endsection

@section('content')

<!-- <img src="{{ asset('storage/cover/LOjkZ43AOtFF7ajcYsYh3DS1lug5FBp5K0q5J1W9.jpeg') }}" alt="">
 -->
<div class="white-box">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="date" value="{{ date('Y-m-d') }}">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" value="{{ old('title') }}">	
				</div>
				<div class="form-group">
					<label for="tags">Tags</label>
					<select class="form-control" id="tags" name="tags[]" multiple="multiple" required>
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
					<label for="keywords">Excerpt</label>
					<textarea name="excerpt" class="form-control">{{ old('excerpt') }}</textarea>
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" class="form-control" id="content">{{ old('content') }}</textarea>
				</div>
				<div class="form-group">
					<label for="cover">Cover</label>
					<input type="file" class="form-control" name="cover" value="{{ old('cover') }}" required>
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

	/*
	CATATAN : 
	ini caranya agak ribet jadi harus diinget baik2.
	- Download tinymce editor yg terbaru
	- pasang tinymce nya ke textarea
	- install library laravel-filemanager
	 1. composer require unisharp/laravel-filemanager:~1.8 
	 2. edit file config/app.php, tambahkan dibagian provider
	    UniSharp\LaravelFilemanager\LaravelFilemanagerServiceProvider::class,
 		Intervention\Image\ImageServiceProvider::class,

 		dan tambahkan dibagian aliases
 		'Image' => Intervention\Image\Facades\Image::class,

 		taruh paling bawah
 	 3. Jalankan command artisans
 	  	php artisan vendor:publish --tag=lfm_config
 		php artisan vendor:publish --tag=lfm_public

 	- pergi ke halaman https://unisharp.github.io/laravel-filemanager/integration
 	  copy scripts untuk tinymce 4

 	  (seharusnya sampe sini udah normal, gatau klo gw ada kelupaan tadi wkwk)

	*/

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