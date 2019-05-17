<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $primaryKey = 'id';

    protected $fillable = ['names', 'lastnames', 'birthday', 'gender', 'address'];

    public function user() {
        return $this->hasMany('App\User', 'id');
    }
}
