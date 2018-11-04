<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
        </div>
        <ul class="nav" id="side-menu">
            <li style="padding: 70px 0 0;">
                <a href="{{ route('dashboard') }}" class="waves-effect {{ $menu == 1 ? 'active' : '' }} "><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; Dashboard</a>
            </li>
            <li>
                <a href="{{ route('category.index') }}" class="waves-effect {{ $menu == 2 ? 'active' : '' }}"><i class="fa fa-list " aria-hidden="true"></i> &nbsp; Category</a>
            </li>
            <li>
                <a href="{{ route('article.index') }}" class="waves-effect {{ $menu == 3 ? 'active' : '' }}"><i class="fa fa-book" aria-hidden="true"></i>  &nbsp; Article</a>
            </li>
        </ul>
    </div>
</div>