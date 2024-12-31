<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'visibility',
    ];
    public function user_workspaces()
    {
        return $this->hasMany(UserWorkspace::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function boards()
    {
        return $this->hasMany(Board::class);
    }
}
