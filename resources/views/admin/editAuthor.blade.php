<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <form method="POST" action="/editAuthorForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$author->id}}">
            <div class="mb-3">
                <label for="nameAuthor" class="form-label">Редактирование автора</label>
                <input class="form-control" type="text" id="nameAuthor" name="nameAuthor" value="{{$author->nameAuthor}}">
            </div>
            <button type="submit">Изменить</button>
        </form>
        @if (session('success'))
    <   div class="alert alert-success alert-dismissible mt-3 auth-status">
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
