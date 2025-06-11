<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'user_id',
    ];
}
