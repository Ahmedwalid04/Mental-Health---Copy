<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Assessment extends Model
{
    protected $fillable = ['user_id', 'answers', 'score', 'result_summary'];

    protected $casts = [
        'answers' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}