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

    public function venues()
    {
        return $this->belongsToMany(Venue::class);
    }

    public function streams()
    {
        return $this->belongsToMany(Stream::class);
    }

    public function subjects()
    {
        return $this->hasManyThrough(Subject::class,Teacher::class);
    }
}
