<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'user_id',
        'workspace_id',
        'board_id',
        'message',
        'status',
    ];
}
