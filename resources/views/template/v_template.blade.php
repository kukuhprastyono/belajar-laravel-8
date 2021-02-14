<!-- latihan 2 -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.0-beta1-dist/css/bootstrap.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    @include('template/v_nav')
    @yield('content')
    <footer class="text-center bg-light" style="margin-top: 70vh;">
    This is footer</footer>
    
    <script src="{{asset('bootstrap-5.0.0-beta1-dist/js/bootstrap.js')}}"></script>
</body>

</html>