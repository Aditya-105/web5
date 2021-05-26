<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author_news extends Model
{
    protected $table = 'author_news';

    protected $fillable = [
        'author_id','news_id',
    ];

    use HasFactory;
}
