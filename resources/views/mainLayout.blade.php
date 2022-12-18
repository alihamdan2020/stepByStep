<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body dir="{{__('message.dir')}}">
    <div class="header">
        <ul class='mainlinks'>
            <li><a href="{{route('home')}}">{{__('message.home')}}</a></li>
            <li><a href="{{route('aboutUs')}}">{{__('message.about')}}</a></li>
            <li><a href="{{route('FAQ')}}">{{__('message.faq')}}</a></li>
            <li><a href="{{route('changeLanguage','en')}}">english</a></li>
            <li><a href="{{route('changeLanguage','ar')}}">arabic</a></li>
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