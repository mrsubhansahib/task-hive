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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
    public function checklist_tasks(){
        return $this->hasMany(ChecklistTask::class);
    }
}
