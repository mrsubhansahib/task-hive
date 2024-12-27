<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable =[
        'user_id',
        'card_id',
        'title',
    ];
}
