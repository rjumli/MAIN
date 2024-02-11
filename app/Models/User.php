<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use \Spatie\Activitylog\Traits\LogsActivity;
use \Spatie\Activitylog\LogOptions;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use LogsActivity;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'is_active'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\UserProfile', 'user_id');
    }

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logFillable()
        ->setDescriptionForEvent(fn(string $eventName) => "This user has been {$eventName}")
        ->useLogName('User')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
