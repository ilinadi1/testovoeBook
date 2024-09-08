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
        <h1>Книги и авторы</h1>
        <div class='mb-3'>
            <ul class="list-group list-group-flush">
                @foreach ($bookList as $book)
                    <li class="list-group-item">{{$book ->nameBook}}
                        <div class="line_author">
                            {{$book->getAuthor->nameAuthor}}
                            <div>
                                <a class="btn_all btn_standart" href="/editBook/{{$book->id}}">Редактировать</a>
                                <a class="btn_all btn_delete" href="/delete/{{$book->id}}">Удалить</a>
                            </div>
                        </div>
                    </li>

                @endforeach
            </ul>
        </div>
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
    {{ $bookList->withQueryString()->links('pagination::bootstrap-5') }}
</body>
</html>
