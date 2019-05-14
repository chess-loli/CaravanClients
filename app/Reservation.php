<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function storageSpot()
    {
        return $this->belongsTo(StorageSpot::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
