<div class="page-header-inner">
    <div class="page-header-inner">
        <div class="navbar-header">
          <div class="left-top" style="background-color: #000080;text-align: center;">
            <a href="{{ url('/view-dashboard') }}"
               class="navbar-brand" style="width: 100%; text-align: center;">
                <img src="{{ url('images/rr-logo-small.png') }}" alt="" class="site-logo" style="width: 75%"  />
            </a>
          </div>
        </div>

        <div class="mob-menu-style">
        <a href="javascript:;"
           class="menu-toggler responsive-toggler"
           data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>

        <div class="top-menu" style="background-color: #000080;">
            <ul class="nav navbar-nav pull-right">
            
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                            <a class="navbar-brand" href="#" >
                                 Hi!   {{ Auth::user()->name }}
                                </a>

                                
                                    <a class="navbar-brand" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
          </div>
        </div>
    </div>
</div>

