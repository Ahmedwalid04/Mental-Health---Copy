<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class subscriptions extends Model
{
    // Define the table name, if it differs from the default
    protected $table = 'subscriptions';

    // Allow mass-assignment for these fields
    protected $fillable = [
        'user_id',
        'plan',
        'start_date',
        'end_date'
    ];

    // Set the date format to Carbon, useful for working with date columns
    protected $dates = ['start_date', 'end_date'];

    // Relationship with User model (each subscription belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
