<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staff';

    protected $fillable = ['firstname', 'secondname', 'email', 'staffno', 'contact'];

    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
