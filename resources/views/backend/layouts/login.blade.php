<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#19b9e7">

        <title>Royal Research:: Dashboard</title>
        <link rel="shortcut icon" href="{{url('images/fav-icon.png')}}" type="image/x-icon">
        <link href="{{url('admin-login-css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('admin-login-css/dev-app.css')}}" rel="stylesheet">
        <link href="{{url('admin-login-css/style.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="images/fav-icon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"><!-- for icon creation -->

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="{{url('admin-login-js/main.js')}}"></script>
        <script type="text/javascript" language="javascript" src="{{url('admin-login-js/bootstrap.min.js')}}"></script>
        <script src="{{url('admin-login-js/plugins.js')}}" type="text/javascript" charset="utf-8"></script>
        <script src="{{url('admin-login-js/app.js')}}" type="text/javascript" charset="utf-8"></script>

        <!-- 030717 add start -->
        <script src="{{url('admin-login-js/jquery-ui.min.js')}}" type="text/javascript" charset="utf-8"></script>
        <script src="{{url('admin-login-js/jquery.switchbutton.js')}}" type="text/javascript" charset="utf-8"></script>
        <!-- 030717 add end -->

        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>--}}
        {{--<script src="{{url('jQuery-Validation-Engine-master/js/jquery.validationEngine.js')}}" type="text/javascript" charset="utf-8"></script>--}}
        {{--<script src="{{url('jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js')}}" type="text/javascript" charset="utf-8"></script>--}}
        {{--<link rel="stylesheet" href="{{url('jQuery-Validation-Engine-master/css/validationEngine.jquery.css')}}" type="text/css"/>--}}

        <script src="{{url('admin-login-js/wow.js')}}"></script>
        <script>
            new WOW().init();
        </script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    </head>
    <body>
        @yield('content')
    </body>
</html>
