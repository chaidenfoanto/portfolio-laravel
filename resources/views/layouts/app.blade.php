<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Free HTML5 Template plus Photoshop design">
    <meta name="keywords" content="free html template, portfolio, html5, sass, jquery">
    <meta name="author" content="Bucky Maler">
    <title>@yield('title', 'Chaiden Foanto Portfolio')</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
</head>
<body>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ secure_asset('js/vendor/jquery-2.2.4.min.js')}}"><\/script>')</script>
    <script src="{{ secure_asset('js/functions-min.js')}}"></script>
</body>
</html>
