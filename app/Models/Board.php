<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'title',
        'workspace_id',
        'description',
        'visibility',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
    public function tabs()
    {
        return $this->hasMany(Tab::class);
    }
    public function labels()
    {
        return $this->hasMany(Label::class);
    }
}
