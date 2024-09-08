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
        <h3 class="mt-2">Редактировать книгу</h3>
        <form method="GET" enctype="multipart/form-data" action="/updateBook">
            @csrf
            <input type="hidden" name="id" value="{{$book->id}}">
            <div class="mb-3">
                <label for="nameBook" class="form-label">Название книги</label>
                <input type="text" class="form-control" id="nameBook" name="nameBook" value="{{$book->nameBook}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Обложка книги</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание книги</label>
                <input class="form-control" type="text" id="description" name="description" value="{{$book->description}}">
            </div>
            <div class="mb-3">
                <label for="publicationYear" class="form-label">Год публикации книги</label>
                <input class="form-control" type="text" id="publicationYear" name="publicationYear" value="{{$book->publicationYear}}">
            </div>
            <div class="mb-3">
                <label for="nameAuthor" class="form-label">Выберите автора</label>
                <select name="selectAuthor">
                    @foreach ($authors as $author)
                        <option value="{{$author->id}}">{{$author->nameAuthor}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nameAuthor" class="form-label">Выберите жанр</label>
                <select name="selectGenre">
                    @foreach ($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->titleGenre}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn_all btn_standart" type="submit">Применить изменения</button>
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
