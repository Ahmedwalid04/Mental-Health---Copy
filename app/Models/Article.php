<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    protected $fillable = ['author_id', 'title', 'content', 'image'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}

