<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->ga }}"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ $page->ga }}', { 'anonymize_ip':true} );
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
        <meta name="description" content="Technical consulting, software development, and engineering for call centers.">
        <meta name="keywords" content="notifi,notifius,notifi us,labbett,patrick,patrick labbett,ohio,call center,call,center,answering,service,answering service">
        <meta property="og:site_name" content="notifi.us">
        <meta property="og:title" content="NotifiUs, LLC">
        <meta property="og:description" content="Technical consulting, software development, and engineering for call centers.">
        <meta property="og:image" content="https://notifi.us/assets/images/innovation.png">
        <meta property="og:url" content="https://notifi.us">
        <meta property="og:type" content="website">
        <meta property="og:image:alt" content="Level up your call center">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image:alt" content="Level up your call center. ">

        <title>@yield('title') &middot; NotifiUs, LLC</title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="icon" type="image/png" href="/assets/images/notifius-icon.png">
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
    
    </head>
    <body class="bg-gray-100 text-gray-900">
        @include('_layouts.nav')
        @yield('body')
        @include('_layouts.footer')
    </body>
</html>