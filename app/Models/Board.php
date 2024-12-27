<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'title',
        'workspace_id',
        'description',
        'visibility',
        'user_id',
    ];
}
