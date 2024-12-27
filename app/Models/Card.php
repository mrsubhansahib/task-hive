<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable=[
        'comments',
        'members',
        'position',
        'start_date',
        'description',
        'title',
        'user_id',
        'card_type',
        'tab_id',
        'label_id',
        'attachment',
        'end_id',
    ];
}
