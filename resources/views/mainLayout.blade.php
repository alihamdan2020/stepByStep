<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="header">
        <ul class='mainlinks'>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('aboutUs')}}">About Us</a></li>
            <li><a href="{{route('FAQ')}}">FAQ's</a></li>
        </ul>

        <ul>
            @guest
            <li><a href="{{route('login')}}">Sign In</a></li>
            @else
            <li><a href="{{route('signout')}}">Sign Out</a></li>
            @endguest
        </ul>

    </div>
    @yield('content')

</body>
</html>