<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'organ_id',
        'name',
        'capacity',
    ];
}
