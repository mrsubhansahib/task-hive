<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable=[
        'comments',
        'members',
        'number',
        'Start_date',
        'description',
        'tilte',
        'created_by',
        'card_type',
        'tab_id',
        'table_id',
        'attachment',
        'end_id',
    ];
}
