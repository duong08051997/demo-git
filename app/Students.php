<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'detail', 'student_id', 'group_id');
    }

}
