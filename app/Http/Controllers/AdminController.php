<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $books = Book::paginate(6);
        return view('admin/admin',['bookList'=>$books]);
    }
    public function addBooks(){
        $addBooks=Author::all();
        $selectGenres = Genre::all();
        return view('admin/addBooks',['authors'=>$addBooks,'genres'=>$selectGenres,]);
    }

    public function addBooksForm(Request $request){
        $request->validate([
            "nameBook" => "required",
            "description" => "required",
            "publicationYear" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg|max:2048",
        ], [
            "nameBook.required" => "Поле обязательно для заполнения",
            "description.required" => "Поле обязательно для заполнения",
            "publicationYear.required" => "Поле обязательно для заполнения",
            "image.required" => "Поле обязательно для заполнения",
            "image.image" => "Загружаемый файл должен быть изображением",
            "image.mimes" => "Разрешенные форматы изображений: jpeg, png, jpg",
            "image.max" => "Максимальный размер файла 2MB",
        ]);

        $user = $request->only("email", "password");
        $addBooksForm = $request->all();
        $image = $request->file('image')->hashName();
        $path_photo = $request->file('image')->store('public/image');
        Book::create([
            "nameBook"=>$addBooksForm['nameBook'],
            "id_author"=>$request['selectAuthor'],
            "description"=>$addBooksForm['description'],
            "image" => $image,
            "publicationYear"=>$addBooksForm['publicationYear'],
            "id_genre"=>$request['selectGenre'],
        ]);
        return redirect('/admin/admin')->with('success','Книга добавлена!');
    }

    public function editBook(Book $id){
        $genresEdit = Genre::all();
        $authorEdit = Author::all();
        return view('admin.editBook', ['book' => $id, 'genres' => $genresEdit, 'authors' => $authorEdit ]);
    }

    public function updateBook(Request $request){
        $book = Book::find($request['id']);
        $photo = $request->file('image');
        if(!empty($photo)){
            $name = $photo->hashName();
            $patch = $photo->store('public/image');
            $book->image = $name;
        }
        $book->nameBook=$request['nameBook'];
        $book->publicationYear=$request['publicationYear'];
        $book->description=$request['description'];
        $book->id_author= $request['selectAuthor'];
        $book->id_genre= $request['selectGenre'];
        $book->save();
        return redirect('/admin/admin')->with('success', 'Книга успешно отредактирована!');
    }

    public function deleteBook($id){
    $delete = Book::find($id);
        if ($delete) {
            $delete->delete();
            return redirect('/admin/admin')->with('success', 'Книга успешно удалена');
        } else {
            return redirect('/admin/admin')->with('error', 'Книга не найдена');
        }
    }

    public function addAuthor(){
        return view('admin.addAuthor');
    }

    public function addAuthorForm(Request $request){
        $request->validate([
            "nameAuthor" => "required",
        ], [
            "nameAuthor.required" => "Поле обязательно для заполнения",
        ]);
        $addAuthorForm = $request->all();
        Author::create([
            "nameAuthor"=>$addAuthorForm['nameAuthor'],
        ]);
        return redirect('/admin/admin')->with('success','Автор добавлен!');
    }

    public function authorList(){
        $authorList = Author::all();
        foreach($authorList as $author){
            $author->count = Book::where("id_author", $author->id)->count();
        }
        return view('admin.authorList', ['authorList' => $authorList]);
    }

    public function deleteAuthor($id){
        $deleteAuthor = Author::find($id);
        if ($deleteAuthor) {
            $deleteAuthor->author()->delete();
            $deleteAuthor->delete();
            return redirect('/admin/authorList')->with('success', 'Автор успешно удален');
        } else {
            return redirect('/admin/authorList')->with('error', 'Автор не найден');
        }
    }
    public function updateAuthor(Author $id){
        return view('admin.editAuthor',['author' => $id]);
    }
    public function editAuthorForm(Request $request){
        $request->validate([
            "nameAuthor" => "required",
        ], [
            "nameAuthor.required" => "Поле обязательно для заполнения",
        ]);
        $authorEdit = Author::find($request['id']);
        $authorEdit->nameAuthor=$request['nameAuthor'];
        $authorEdit->save();
        return redirect('/admin/authorList')->with('success', 'Автор изменен');
    }

}
