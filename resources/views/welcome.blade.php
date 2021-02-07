<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @livewireStyles
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
        <link href="css/lateefregular.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
        <link rel="manifest" href="images/favicon/site.webmanifest">
        <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>موقف الديركي</title>
    </head>
    <body class="bg-backgrounds">
        <div class="sm:container mx-auto px-4 ">
            @yield('content')
        </div>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
        <script type="text/javascript" src="js/jquery/jquery.min.js"> </script> 
        <script src="js/datepicker.js"></script>
    </body>
</html>
