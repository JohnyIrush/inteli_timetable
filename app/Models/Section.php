<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Section
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function venue()
    {
        return $this->hasOne(Venue::class);
    }
}
