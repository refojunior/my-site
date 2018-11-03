@extends('backend.app')

@section('title')
Edit Category
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title">Add Category</h3>
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
        
    </div>
</div>

@endsection