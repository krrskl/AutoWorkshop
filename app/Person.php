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

    public function cars() {
        return $this->hasManyThrough(Vehicle::class, User::class, 'personId', 'userId');
    }

    public function scopeFullInfo($query)
	{
        return $query->with('cars');
    }
}
