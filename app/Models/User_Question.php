<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Question extends Model
{
    protected $fillable = [

        'exam_id',
        'user_id',
        'question_id',

    ];
}
