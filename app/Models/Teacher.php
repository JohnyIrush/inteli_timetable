<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }


    public function streams()
    {
       return  $this->belongsToMany(Stream::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get all of the sections for the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function sections(): HasManyThrough
    {
        return $this->hasManyThrough(Section::class, Level::class);
    }

}
