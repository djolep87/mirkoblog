<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'mirkoblog')}}</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="/css/mdb.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/addons/datatables.css">
        <link rel="stylesheet" type="text/css" href="/css/addons/datatables.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        

        @include('inc/navbar')

        <div class="container">
            @include('inc.messages')
            @yield('content')
            
           
        </div>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        {{-- @include('inc/footer') --}}
    </body>
</html>
