<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;

    public function levels()
    {
        $this->belongsToMany(Level::class);
    }

    public function venues()
    {
        $this->hasMany(Venue::class);
    }

    public function teachers()
    {
        $this->hasMany(Teacher::class);
    }
}
