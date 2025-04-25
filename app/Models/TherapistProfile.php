<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TherapistProfile extends Model
{
    use HasFactory;

    // Fillable fields for TherapistProfile
    protected $fillable = [
        'user_id',
        'bio',
        'price_per_half_hour',
        'qualifications',
        'experience',
        'specializations',
        'profile_image',
    ];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class); // A therapist TProfileController.php belongs to one user
    }
}
