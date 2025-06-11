<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [

        'teacher_id',
        'organ_id',
        'skill_id',

    ];
}
