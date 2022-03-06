<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    /**
     * Get all of the venues for the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    
    public function venues()
    {
        return $this->hasManyThrough(Venue::class, Section::class);
    }
    
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
