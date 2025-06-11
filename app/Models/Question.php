<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'skill_id',
        'teacher_id',
        'organ_id',
    ];
}
