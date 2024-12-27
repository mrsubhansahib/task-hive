<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChecklistTask extends Model
{
    protected $fillable =[
        'user_id',
        'description',
        'position',
    ];
}
