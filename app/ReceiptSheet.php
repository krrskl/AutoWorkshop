<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiptSheet extends Model
{
    protected $fillable = ['description'];

    public function vehicle() {
        return $this->belongsTo('App\Vehicle', 'vehicleId');
    }
}
