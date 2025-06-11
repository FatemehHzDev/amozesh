<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam_User extends Model
{

    protected $fillable = [

        'exam_id',
        'user_id',
        'finish',

    ];
}
