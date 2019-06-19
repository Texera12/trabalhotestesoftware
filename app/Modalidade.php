<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
      protected $fillable = ['nome']; 

      public function atleta() {
    	return $this->hasMany('App\Atleta');
    }
}

