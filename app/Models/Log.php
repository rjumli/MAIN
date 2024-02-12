<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $table = 'authentication_log';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'authenticatable_id', 'id');
    }

    public function scopeLists($query,$count){
        $logs = $query->with('user:id,role,is_active','user.profile:id,user_id,firstname,lastname,middlename')->orderBy('id','DESC')->paginate($count);
        return $logs;
    }
}
