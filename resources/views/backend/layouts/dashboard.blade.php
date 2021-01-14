<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.include.partials.head')
</head>

<body class="page-header-fixed">
    <div class="page-header navbar navbar-fixed-top">
        @include('backend.include.partials.header')
    </div>

    <div class="clearfix"></div>

    <div class="page-container">
        <div class="page-sidebar-wrapper">
            @include('backend.include.partials.sidebar')
        </div>

        <div class="page-content-wrapper">
            <div class="page-content">

                @if(isset($siteTitle))
                    <h3 class="page-title">
                        {{ $title }}
                    </h3>
                @endif

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        @if(Session::has('error'))
                            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                        @endif

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-to-top"
         style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    
    {!! Form::open(['route' => 'logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
        <button type="submit">Logout</button>
    {!! Form::close() !!}
 
    <div id="snackbar"></div>
    <div id="loading"> <img src="{{url('images/preloader.gif')}}"></div>
    @include('backend.include.partials.javascripts')
    @include('backend.include.partials.footerimport')

  </body>

</html>
