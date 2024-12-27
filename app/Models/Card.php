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
    public function tab()
    {
        return $this->belongsTo(Tab::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function label()
    {
        return $this->belongsTo(Label::class);
    }
    public function checklist()
    {
        return $this->hasMany(Checklist::class);
    }
}
