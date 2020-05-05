<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function PHPSTORM_META\type;

class Property extends Model {
    protected $fillable = ['price', 'description', 'user_id', 'photo', 'type', 'state'];
//    protected $attributes = ['type' => 'sale'];

    public function user() {
        return $this -> belongsTo('App\User', 'user_id');
    }

    public function publication() {
        return $this -> hasOne('App\Publication');
    }
}
