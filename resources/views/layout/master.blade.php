<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="Tamilan Services">
    <meta name="keywords" content=" ">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Tamilan Services</title>
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/plugin/google-font/material-icons.css')}}" />
    <link href="{{asset('/plugin/bootstrap-5.2.3/bootstrap.css')}}" rel="stylesheet">
    <!-- CSRF Token -->
    @stack('plugin-styles')
    <!-- common css -->
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet">
    @stack('style')
</head>

<body>
    <header>
        @include('layout.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('layout.footer')
    </footer>
    
    <script src="/plugin/bootstrap-5.2.3/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->
    <script src="{{ asset('/js/custom.js') }}"></script>
    @stack('custom-scripts')
</body>

</html>