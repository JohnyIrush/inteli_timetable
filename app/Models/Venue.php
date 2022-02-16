<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;


    public function levels()
    {
        $this->belongsToMany(Level::class);
    }

    public function streams()
    {
        $this->belongsToMany(Streams::class);
    }

}
