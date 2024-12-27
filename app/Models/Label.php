<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'color',
        'board_id',
    ];
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cards()
    {
        return $this->hasOne(Card::class);
    }
}
