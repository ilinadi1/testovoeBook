<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameBook',
        'id_author',
        'description',
        'publicationYear',
        'id_genre',
        'image',
    ];

    public function getAuthor(){
        return $this->belongsTo(Author::class,'id_author');
     }
     public function getGenre(){
        return $this->belongsTo(Genre::class,'id_genre');
     }
}
