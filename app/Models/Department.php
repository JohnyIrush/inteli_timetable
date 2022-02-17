<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function teachers()
    {
        $this->hasMany(Teacher::class);
    }

    public function subjects()
    {
        $this->belongsToMany(Subject::class);
    }
}
