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
        <h1>Авторы и количество их книг</h1>
        <div class='mb-3'>
            <ul class="list-group list-group-flush">
                @foreach ($authorList as $author)
                    <li class="list-group-item">
                        <div class="line_author">
                            <div class="line_author_item">
                                <p class="author_name">{{$author->nameAuthor}}</p>
                                <p class="author_col">Количество книг: {{$author->count}}</p>
                            </div>
                            <div>
                                <a class="btn_all btn_standart" href="/updateAuthor/{{$author->id}}">Редактировать</a>
                                <a class="btn_all btn_delete" href="/deleteAuthor/{{$author->id}}">Удалить</a>
                            </div>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
