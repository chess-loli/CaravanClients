<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StorageSpot extends Model
{
    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
