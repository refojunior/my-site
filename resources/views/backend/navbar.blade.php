<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="{{ route('dashboard') }}">
                <img src="{{ asset('img/logo-admin.jpg') }}" width="230px" alt="home" class="light-logo" /> 
            </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form id="search" action="{{ route('article.search') }}" class="app-search hidden-sm hidden-xs m-r-10" method="get">
                  
                    <input type="text" name="title" placeholder="Search Article..." class="form-control"> <a id="search-article"><i class="fa fa-search"></i></a> 
                </form>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
   
</nav>

@push('scripts')
<script>
    document.getElementById("search-article").onclick = function() {
        document.getElementById("search").submit();
    }
</script>
@endpush