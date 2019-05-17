<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ['name'];
    protected $primaryKey = 'id';

    public function user() {
      return $this->hasMany('App\User', 'id');
    }
}
