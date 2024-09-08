<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[BookController::class,'index']);
Route::get('/signIn',[UserController::class,'signIn']);
Route::get('/signUp',[UserController::class,'signUp']);
Route::get('/logout',[UserController::class,'logout']);
Route::post('/signUpForm',[UserController::class,'signUpForm']);
Route::post('/signInForm',[UserController::class,'signInForm']);

Route::middleware('CheckRole:Администратор')->group(function(){
    Route::get('/admin/addBooks',[AdminController::class,'addBooks']);
    Route::get('/admin/admin',[AdminController::class,'admin']);
    Route::get('/delete/{id}', [AdminController::class, 'deleteBook']);
    Route::get('/editBook/{id}', [AdminController::class, 'editBook']);
    Route::get('/admin/addAuthor',[AdminController::class,'addAuthor']);
    Route::get('/admin/authorList', [AdminController::class,'authorList']);
    Route::get('/deleteAuthor/{id}', [AdminController::class, 'deleteAuthor']);
    Route::get('/updateAuthor/{id}', [AdminController::class, 'updateAuthor']);
    Route::post('/addBooksForm',[AdminController::class,'addBooksForm']);
    Route::get('/updateBook',[AdminController::class,'updateBook']);
    Route::post('/addAuthorForm',[AdminController::class,'addAuthorForm']);
    Route::post('/editAuthorForm',[AdminController::class,'editAuthorForm']);
});

