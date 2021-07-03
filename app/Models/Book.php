<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'title', 'synopsis', 'author_id'];

    // Foreign key3
    public function authors() {
        return $this->belongsToMany(Author::class);
    }
}


