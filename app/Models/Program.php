<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'num',
        'room_id',
        'organ_id',
        'skill_id',
        'sat',
        'sun',
        'mon',
        'tue',
        'wen',
        'thr',
        'fri',
    ];
}
