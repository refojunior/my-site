<!-- INI BACKEND PAGE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="My Own Website">
    <meta name="author" content="refojunior">

    <title>@yield('title') | Refo Junior</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstraap/css/bootstrap.min.css') }}" rel="stylesheet" id="styles">

    <link href="{{ asset('css/sidebar-nav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/colors/default.css')}}" id="theme" rel="stylesheet">

    <!-- FONT AWESOME v5 & Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- my custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/my-style.css')}}">

    <!-- TOAST -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="fix-header" style="height: auto">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    @guest
        @yield('login')
    @else
    

    <div id="wrapper">
        
        @include('backend.navbar')
       
            @include('backend.sidebar')
       
         <div id="page-wrapper">
            <div class="container-fluid">
               
                <br><br>
                <!-- FORM ERROR VALIDATION -->
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

                @yield('content')
            </div>

            
        </div>
    </div>

    @endguest
    
   

    <!-- Bootstrap core JavaScript -->
    <!-- jQuery -->
     <script src="{{ asset('assets/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/bootstraap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('js/sidebar-nav.min.js')}}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>
    
    @include('backend.flash_message')

    @stack('scripts')
    
</body>
</html>
