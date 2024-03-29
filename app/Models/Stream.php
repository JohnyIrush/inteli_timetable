<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }

    public function venues()
    {
        $this->hasMany(Venue::class);
    }

    public function teachers()
    {
        $this->hasMany(Teacher::class);
    }

    public function venue()
    {
        $this->hasOne(Venue::class);
    }
}
