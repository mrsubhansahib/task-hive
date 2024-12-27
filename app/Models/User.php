<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'job_title',
        'role',
        'password',
        'image' ,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class);   
    }
    public function user_workspaces()
    {
        return $this->hasMany(UserWorkspace::class);
    }
    public function workspaces()
    {
        return $this->hasMany(Workspace::class);
    }
    public function boards(){
        return $this->hasMany(Board::class);
    }
    public function labels(){
        return $this->hasMany(Label::class);
    }
    public function tabs(){
        return $this->hasMany(Tab::class);
    }
    public function cards(){
        return $this->hasMany(Card::class);
    }
    public function checklists(){
        return $this->hasMany(Checklist::class);
    }
    public function checklist_tasks(){
        return $this->hasMany(ChecklistTask::class);
    }    
}
