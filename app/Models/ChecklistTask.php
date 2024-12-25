<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChecklistTask extends Model
{
    public $table ='checklist_task';
    protected $fillable =[
        'created_by',
        'description',
        'postion',
    ];
}
