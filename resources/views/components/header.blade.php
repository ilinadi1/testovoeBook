<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    </html><div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">ReadBook</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/signIn">Авторизация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/signUp">Регистрация</a>
                    </li>
                    @endguest
                    @auth
                        @if (Auth::user()->id_role == 1)
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/admin/admin">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/addBooks">Добавить книгу</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/addAuthor">Добавить автора</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/authorList">Авторы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/logout">Выход</a>
                            </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Главная</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/logout">Выход</a>
                            </li>
                        @endif
                    @endauth
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <script src="/bootstrap.min.js"></script>
</body>

