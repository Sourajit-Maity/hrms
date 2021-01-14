<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="viewport" content="width=device-width">

{{--jquery.css--}}
<link rel="stylesheet" type="text/css" href="{{url('css/jquery-ui.css')}}">

{{--jquery-ui.css--}}
<link rel="stylesheet" type="text/css" href="{{url('css/themes-style.css')}}">

{{--fav-icon--}}
<link rel="shortcut icon" href="{{url('images/fav-icon.png')}}" type="image/x-icon">

{{--title--}}
{{--<title>Carlingford Accommodation - Providers of Self Catering Accommodation in Carlingford, Co Louth - Self Catering Apartments - Self Catering Properties - Carlingford Accommodation</title>--}}
<title>
    @if(isset($title))
        {{$title}}
        @else
            Carlingford Accommodation
    @endif
</title>
<meta name="description" content="{{$desc}}"/>
<link rel="canonical" href="https://carlingfordaccommodation.com/" />
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="{{$website}}" />
<meta property="og:title" content="{{$title}}" />
<meta property="og:description" content="{{$desc}}." />
<meta property="og:url" content="{{$url}}" />
<meta property="og:site_name" content="Carlingford Accommodation" />
<meta property="og:image" content="https://carlingfordaccommodation.com/wp-content/uploads/2017/05/carlingford.jpg" />
<meta property="og:image:secure_url" content="https://carlingfordaccommodation.com/wp-content/uploads/2017/05/carlingford.jpg" />
<meta property="og:image:width" content="2600" />
<meta property="og:image:height" content="1733" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="{{$desc}}." />
<meta name="twitter:title" content="{{$title}}" />
<meta name="twitter:image" content="https://carlingfordaccommodation.com/wp-content/uploads/2017/05/carlingford.jpg" />
<!-- /  SEO plugin. -->

{{--bootstrap-year-calendar--}}
<link rel="stylesheet" type="text/css" href="{{ url('css') }}/bootstrap-calendar.css">
<script src="{{ url('js') }}/bootstrap-calendar.js"></script>
<meta name="description" content="Official Site of Carlingford Accommodation. All houses situated in the Heart of Carlingford."/>

<link rel='dns-prefetch' href='//s.w.org' />

{{--jquery.js--}}
<script src="{{ url('js') }}/jquery.js"></script>

{{--jquery-ui.js--}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{{--font-awesome--}}
<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}"/>

{{--<link rel="stylesheet"--}}
{{--      href="{{ url('quickadmin/css') }}/bootstrap.min.css"/>--}}
<script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>

{{--our css--}}
<link rel="stylesheet" href="{{ url('css/backbone.css') }}"/>

{{--select2--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

{{--parslay--}}
<link href="{{ url('css') }}/parslay.css" rel="stylesheet" />
<script src="{{ url('js') }}/parslay.min.js"></script>
{{--parslay credit card--}}
<script src="{{ url('js/plugins') }}/credit-card.js"></script>

{{--recapcha--}}
<script src='https://www.google.com/recaptcha/api.js'></script>

{{--switch-button css--}}
<link rel="stylesheet" href="{{ url('css/switchButton.css') }}"/>
<link rel="stylesheet" href="{{ url('css/main.css') }}"/>

{{--switch-button js--}}
<script src="{{ url('js') }}/switchButton.js" type="text/javascript"></script>
{{--//momentjs--}}
<script src="{{ url('js') }}/moment.js"></script>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

{{--bootstrap-year-calendar--}}
<link rel="stylesheet" type="text/css" href="{{ url('css') }}/bootstrap-calendar.css">
<script src="{{ url('js') }}/bootstrap-calendar.js"></script>
<script src="http://www.bootstrap-year-calendar.com/js/bootstrap.min.js"></script>
<script src="{{ url('js') }}/bootstrap-popover.js"></script>

{{--circle-menu--}}
<link href="{{url('css/circle-menu.css')}}" rel="stylesheet">
<script src="{{url('js/circleMenu.js')}}"></script>

{{--datatable--}}
<script src="{{ url('quickadmin/js') }}/main.js"></script>
<link rel="stylesheet"
      href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
<link rel="stylesheet"
      href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css"/>

<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
