<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publications extends Model {
    protected $fillable = ['publisher_id', 'property_id', 'title', 'status'];
    protected $attributes = ['status' => true];

    public function owner() {
        return $this -> belongsTo('App\User');
    }

    public function property() {
        return $this -> belongsTo('App\Property');
    }

    public function contacts() {
        return $this -> hasMany('App\Contacts');
    }
}
