<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titleGenre',

    ];
    public function genre(){
        return $this->hasMany(Book::class,'id_genre');
    }
}
