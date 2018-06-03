<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="container">
        <div class="row brd_b header">
            <div class="col-md-10">
                <h1>Книга рецептов</h1>
            </div>
            <div class="col-md-2">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="login" href="{{ route('login') }}">Login</a>
                                <a class="login" href="{{ route('register') }}">Register</a>
                                @endauth
                    </div>
                @endif
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4 aside brd_r">
                <a href="{{ route('recipes.index') }}"><h3>Рецепты</h3></a>
                <a href="{{ route('ingredients.index') }}"><h3>Игредиенты</h3></a>

            </div>
            <div class="col-md-8 content">
                @yield('content')
            </div>
        </div>
    </div>




    <script src="https://use.fontawesome.com/9879921d1f.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>
</html>