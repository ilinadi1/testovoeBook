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
        @if (session('logout'))
        <div class="alert alert-success alert-dismissible mt-3 auth-status">
            <div class="alert-text">
                {{ session('logout') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
        @endif
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
        <h1>Библиотека книг</h1>
        <div class="card_all">
            @foreach ( $bookCards as $bookCard )
            <div class="card" style="width: 18rem;">
               <div class="img_container">
                <img src="/storage/image/{{$bookCard ->image }}" class="card-img-top img_item" alt="Картинка не прогрузилась">
               </div>

              <h5 class="card-title">{{$bookCard ->nameBook}}</h5>
              <h6>{{$bookCard ->getAuthor->nameAuthor}}</h6>
              <p>{{$bookCard ->getGenre->titleGenre}}</p>
              <p>{{$bookCard ->publicationYear}}</p>
              <p>{{$bookCard ->description}}</p>
            </div>
            @endforeach
        </div>

    </div>
    {{ $bookCards->withQueryString()->links('pagination::bootstrap-5') }}
</body>
</html>
