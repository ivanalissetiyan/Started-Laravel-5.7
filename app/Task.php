<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function subject1()
    {
         return $this->belongsTo(subject1::class);
    }

}
