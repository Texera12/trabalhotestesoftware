<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    protected $fillable = ['nome', 'sexo', 'dt_nasci', 'modalidade', 'categoria']; 

    public function historico() {
    	return $this->hasMany('App\Historico');
    }
}
