<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class LevelStream extends Pivot
{
    public function venue()
    {
        return $this->hasOne(Venue::class);
    }
}
