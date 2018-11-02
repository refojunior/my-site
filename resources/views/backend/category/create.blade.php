@extends('backend.app')

@section('title')
Add Category
@endsection

@section('content')

@if($errors->any())
<div class="row">
    <div class="col-md-6">
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            
        </div>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title">Add Category</h3>
            <form action="{{ route('category.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
        
    </div>
</div>

@endsection

