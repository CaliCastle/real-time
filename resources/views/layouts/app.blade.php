<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.useso.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
     <link href="{{ url('css/app.css') }}" rel="stylesheet">

    {{--<script src="https://js.pusher.com/3.1/pusher.min.js"></script>--}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

    @include('layouts.partials.nav')

    @yield('content')

    <!-- JavaScripts -->
    {{--<script>--}}
        {{--var PUSHER_KEY = "{{ config('broadcasting.connections.pusher.key') }}";--}}
    {{--</script>--}}
    <script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    {{--<script src="{{ url('js/pusher.js') }}"></script>--}}
     <script src="{{ url('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
