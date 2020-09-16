<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function students()
    {
        return $this->belongsToMany(Students::class,'detail','group_id','student_id');
    }

}
