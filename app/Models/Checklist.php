<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable =[
        'creatded_by',
        'card_id',
        'title',
    ];
}
