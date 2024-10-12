<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ route('home') }}"
               class="navbar-brand me-auto">Главная</a>
            @guest
                <a href="{{ route('register') }}"
                   class="nav-item nav-link">Регистрация</a>
                <a href="{{ route('login') }}"
                   class="nav-item nav-link">Вход</a>
            @endguest
            @auth
                <a href=""
                   class="nav-item nav-link">Мои задачи</a>
                <form action="{{ route('logout') }}" method="POST"
                      class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger"
                           value="Выход">
                </form>
            @endauth
        </div>
    </nav>
    @auth
    <h1 class="my-3 text-center">Задачи</h1>
    @endauth
@yield('content')
</body>
</html>
