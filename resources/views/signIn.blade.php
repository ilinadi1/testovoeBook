<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>Document</title>
</head>

<body>
    <x-header></x-header>
    <div class='container'>
        <h1>Авторизация</h1>
        <form action="/signInForm" method ="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Введите электронную почту</label>
                <input type="email" id="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Введите пароль</label>
                <input type="password" id="password" class="form-control" name="password">
            </div>
            <button class="btn_all btn_standart" type="submit">Авторизироваться</button>
            <p>Вас нет в нашей системе?<a class="link_auth" href="/signUp"> Зарегистрируйтесь</a></p>
        </form>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible mt-3 auth-status">
                <div class="alert-text">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <script src="/bootstrap.min.js"></script>
</body>

</html>
