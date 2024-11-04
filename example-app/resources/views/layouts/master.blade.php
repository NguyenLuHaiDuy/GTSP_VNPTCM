<!doctype html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS FILES -->        
        <link href="{{ asset('assets/client/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/client/css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/client/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <x-header></x-header>

        @yield('contents')

        <x-footer></x-footer>
        
        @stack('script')
    </body>
</html>
