@extends('backend.app')

@section('title')
Data Articles
@endsection

@section('content')

<style>
	.tags {
		background-color: #17A2B8;
		padding:3px;
		border-radius:5px;
		font-size:12px;
		color:white;
		margin-right: 5px;
	}
</style>
<div class="row">
    <div class="col-md-12"><a href="{{ route('article.create') }}" class="btn btn-sm btn-primary">Add Articles</a></div>
</div>
<br>
<div class="white-box">	
	<div class="row">
		<div class="col-md-4">
			<img src="{{ asset('storage/test.jpg') }}" alt="test" class="img-responsive">
		</div>
		<div class="col-md-8">
			<h3>Judul Artikel</h3>
			<a href="#" class="tags">Programming</a><a href="#" class="tags">Javascript</a><a href="#" class="tags">Tips</a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque expedita accusamus accusantium velit eos voluptate nisi, natus culpa est quos rerum illo similique possimus asperiores animi hic, reiciendis cupiditate totam[...]</p>
			<a href="" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
			<a href="" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a>
			<a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
		</div>
	</div>
	
</div>
@endsection

