<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';
    protected $fillable = ['staff_id', 'title', 'description'];

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}
