<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function teachers()
    {
        $this->hasMany(Teacher::class);
    }

    public function departments()
    {
        $this->belongsTo(Department::class);
    }

    public function levels()
    {
        $this->hasMany(Level::class);
    }
}
