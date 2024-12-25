<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $fillable = [
        'created_by',
        'title',
        'description',
        'visibility',
    ];
}
