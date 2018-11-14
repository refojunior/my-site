@extends('frontend.app')

@section('frontend-title')
Contact Form
@endsection


@push('style_navbar')
<?= styleNavbar() ?>
@endpush

@section('content')

<br>

@push('contact')

@include('frontend.contact')

@endpush




@endsection