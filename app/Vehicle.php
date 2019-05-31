<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['personId', 'repairing', 'brand', 'color', 'license_plate', 'model', 'mileage'];
    protected $primaryKey = 'id';
    protected $table = 'vehicles';

    public function person() {
        return $this->belongsTo('App\Person', 'personId');
    }

    public function receipt_sheet() {
        return $this->hasMany('App\ReceiptSheet', 'id');
      }
}
