<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AZHRMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="row">
    <div class="column">
       
        <img src="../../../assets/images/RR-wholeHeader(5).png" />
    </div>
</div>

    
    
 

</head>
<body>
    <div id="app">
   
        

     
        <main class="py-4">
            @yield('content')
        </main>
       
        
   
</body>
</html>
<style>
    .row {
  display: flex;
}

.column {
  flex: 33.33%;
  padding: 5px;
}
</style>

