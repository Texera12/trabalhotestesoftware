<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = ['data', 'hora', 'atleta_id'];

    public function historico_atletas() {
    	return $this->hasMany('App\HistoricoAtletas');
	}
}