<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWorkspace extends Model
{
    protected $fillable = [
        'user_id',
        'workspace_id',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function workspaces()
    {
        return $this->belongsToMany(Workspace::class);
    }
}
