<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }


    public function streams()
    {
       return  $this->hasMany(Stream::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function department()
    {
        //return $this->hasManyThrough(Department::class,Subject::class);
    }
}
