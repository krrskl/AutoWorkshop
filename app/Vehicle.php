<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['userId'];
    protected $primaryKey = 'id';
    protected $table = 'vehicles';

    public function user() {
        return $this->belongsTo('App\User', 'userId');
    }

    public function receipt_sheet() {
        return $this->hasMany('App\ReceiptSheet', 'id');
      }
}
