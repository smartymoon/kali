<html>
    <head>
        <title>韩国阿里 - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/boot.css')}}">
        <link rel="stylesheet" href="{{asset('css/wan.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/ali_icon.css')}}">
        @yield('local_css')<script src="{{asset('js/jquery_and_boot.min.js')}}"></script>
        <script src="{{asset('js/all.js')}}"></script>
        @yield('local_js')
    </head>
    <body>
        @section('header')
            @include('layouts.header')
        @show
        @yield('content')
        @section('footer')
            @include('layouts.footer')
        @show
    </body>
</html>
