<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            @yield('search')
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block">Logged as {{ Auth::user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <a href="/" class="dropdown-item has-icon">
                    <i class="fas fa-home"></i> Home
                </a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item has-icon text-danger" style="color:white;" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">                              
                    {{ __('Logout') }} 
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                    style="display: none; color:white;">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
</nav>