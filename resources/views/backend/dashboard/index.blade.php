@extends('backend.app')

@section('title')
Dashboard 
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Welcome {{ Auth::user()->username }} !</h3> 
            <hr>
            <p>Selamat datang untuk diri sendiri. Terus asah kemampuan codingmu!</p>
        </div>

    </div>
</div>

@endsection
