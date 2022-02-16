<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function levels()
    {
        $this->hasMany(Level::class);
    }


    public function streams()
    {
        $this->hasMany(Stream::class);
    }

    public function subjects()
    {
        $this->hasMany(Subject::class);
    }

    public function departments()
    {
        $this->belongsTo(Department::class);
    }
}
