<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;


    public function venues()
    {
        $this->hasMany(Venue::class);
    }

    public function streams()
    {
        $this->hasMany(Stream::class);
    }

    public function teachers()
    {
        $this->hasMany(Teacher::class);
    }
}
