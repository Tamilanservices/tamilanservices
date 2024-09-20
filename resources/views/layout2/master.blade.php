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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/plugin/google-font/material-icons.css')}}" />
    <link href="{{asset('/plugin/bootstrap-5.2.3/bootstrap.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    @stack('plugin-styles')
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet">
    @stack('style')
  </head>
<body>
  <div class="wrapper">
      @include('layout2.sidebar')
      <div id="content">
        @include('layout2.header')
        <main>
          @yield('content')
        </main>
      </div>
  </div>

    <script src="/plugin/bootstrap-5.2.3/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    @stack('plugin-scripts')
    <script src="{{ asset('/js/custom.js') }}"></script>
    @stack('custom-scripts')
</body>
</html>