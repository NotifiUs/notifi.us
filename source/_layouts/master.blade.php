<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
        @stack('meta')

        <title>@yield('title') &middot; NotifiUs, LLC</title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="icon" href="/assets/images/notifius-icon.png">
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
    
    </head>
    <body class="bg-white text-gray-900">
        @include('_layouts.nav')
        @yield('body')
        @include('_layouts.footer')
    </body>
</html>