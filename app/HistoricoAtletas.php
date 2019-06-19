<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricoAtletas extends Model
{
    protected $fillable = ['historico_id', 'atleta_id'];

    public function atleta(){
    	return $this->belongsTo('App\Atleta');
	}
}