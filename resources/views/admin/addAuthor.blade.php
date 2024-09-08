<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style.css">
    <title>Document</title>
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <form method="POST" action="/addAuthorForm" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nameAuthor" class="form-label">Добавьте автора</label>
                <input class="form-control" type="text" id="nameAuthor" name="nameAuthor">
            </div>
            <button class="btn_all btn_standart" type="submit">Добавить</button>
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
</body>
</html>
