<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\TherapistProfile;
use App\Models\PatientProfile;
use App\Models\Assessment;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'age',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationships
    public function therapistProfile()
    {
        return $this->hasOne(TherapistProfile::class);
    }

    public function patientProfile()
    {
        return $this->hasOne(PatientProfile::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    /**
     * The "booted" method of the model.
     */
    protected static function booted()
    {
        static::created(function ($user) {
            if ($user->role === 'therapist' && !$user->therapistProfile) {
                TherapistProfile::create([
                    'user_id' => $user->id,
                    'bio' => '',
                    'price_per_half_hour' => 0,
                    'qualifications' => '',
                    'experience' => '',
                    'specializations' => '',
                    'profile_image' => null,
                ]);
            }

            if ($user->role === 'patient' && !$user->patientProfile) {
                $assessment = $user->assessments()->latest()->first();

                PatientProfile::create([
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'age' => $user->age,
                    'score' => $assessment ? $assessment->score : 0,
                ]);
            }
        });

        static::updated(function ($user) {
            if ($user->role === 'therapist' && !$user->therapistProfile) {
                TherapistProfile::create([
                    'user_id' => $user->id,
                    'bio' => '',
                    'price_per_half_hour' => 0,
                    'qualifications' => '',
                    'experience' => '',
                    'specializations' => '',
                    'profile_image' => null,
                ]);
            }

            if ($user->role === 'patient' && !$user->patientProfile) {
                $assessment = $user->assessments()->latest()->first();

                PatientProfile::create([
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'age' => $user->age,
                    'score' => $assessment ? $assessment->score : null,
                ]);
            }
        });
    }
}
