<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    protected $fillable = [
        'student_id',
        'behave_type',
        'laocation',
        'action_taken',
        'body',
    ];
}
