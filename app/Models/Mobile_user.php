<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobile_user extends Model
{
    protected $fillable = [
        'mobile_id',
        'user_id',
        'main_phone',
    ];
}
