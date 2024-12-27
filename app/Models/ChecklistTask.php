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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function checklist()
    {
        return $this->belongsTo(Checklist::class);
    }
}
