<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameAuthor',
    ];

    public function author(){
        return $this->hasMany(Book::class,'id_author');
    }
}
