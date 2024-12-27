<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'color',
        'board_id',
    ];
}
