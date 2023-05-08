<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Laravel mix compiled-->
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    
    <title>@yield('title')</title>
</head>
<body>
    <div id="app">

        @yield('content')


        <!--Laravel mix compiled-->
        <script src="{{url('js/app.js')}}"></script>

    </div>
</body>
</html>