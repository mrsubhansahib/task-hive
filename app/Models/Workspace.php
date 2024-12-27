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
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
