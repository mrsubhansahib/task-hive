<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    public $table='checklist';
    protected $fillable =[
        'creatded_by',
        'card_id',
        'title',
    ];
}
