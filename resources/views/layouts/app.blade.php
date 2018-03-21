<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="An international internship through Better Internship Program is the perfect way to kickstart your career combined with an amazing travel experience.">
        <title>Oversea Internship Program | Better and Customized Free internship jobs in World Wide</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >     
        <link rel="stylesheet" href="{{asset('css/blog.css')}}" >
    </head>
    <body>
    <div class="container">
        @include('layouts.header')
        @include('layouts.navbars')
        
        @section('jumbotron_top')
        @show

        @section('topposts_section')
        @show

        @section('jumbotron_bottom')
        @show

        
    </div>
    <main role="main" class="container">
        @yield('content')
    </main>
        @include('layouts.footer')    

    <script src="{{asset('js/jquery-slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script defer src="{{asset('js/fontawesome.js')}}"></script>
    <script defer src="{{asset('js/main.js')}}"></script>
    
    </body>
</html>
