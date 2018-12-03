<!-- INI HOME page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('frontend-title') | Refo Junior</title>
    <link rel="icon" href="{{ asset('img/my-icon.jpg') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstraap/css/bootstrap1.min.css') }}" rel="stylesheet">
    <!-- FONT AWESOME v5 & Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <!-- my custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/my-style.css?v=2')}}">
    @include('frontend.meta')
</head>


@include('frontend.navbar')

<!-- Contentnya -->

@yield('content')

<!-- Contact form -->
@stack('contact')

@include('frontend.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/bootstraap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('assets/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
  
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/my.js')}}"></script>

    @stack('scripts')
    
</body>
</html>