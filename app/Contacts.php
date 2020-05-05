<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model {
    protected $fillable = ['interested_id', 'publication_id'];

    public function publication() {
        return $this -> belongsTo('App\Publication');
    }

    public function interested() {
        return $this -> belongsTo('App\User');
    }
}
