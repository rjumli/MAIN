<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Spatie\Activitylog\Traits\LogsActivity;
use \Spatie\Activitylog\LogOptions;

class UserProfile extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'firstname', 
        'lastname', 
        'middlename',
        'gender',
        'mobile',
        'user_id'
    ];

    public function setFirstnameAttribute($value)
    {
        $this->attributes['firstname'] = ucwords(strtolower($value));
    }

    public function setLastnameAttribute($value)
    {
        $this->attributes['lastname'] = ucwords(strtolower($value));
    }

    public function setMiddlenameAttribute($value)
    {
        $this->attributes['middlename'] = ucwords(strtolower($value));
    }

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logFillable()
        ->setDescriptionForEvent(fn(string $eventName) => "This profile has been {$eventName}")
        ->useLogName('User Profile')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
