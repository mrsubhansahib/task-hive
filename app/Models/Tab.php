<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $fillable = [
        'board_id',
        'user_id',
        'title',
        'position',
    ];
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
