<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AtletaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function nome_required()
    {
        $atleta = new Atleta();

        $atleta->nome = "Vitor";
        $atleta->sobrenome = "Gheller Teixeira";
        $atleta->dt_nasci = "1994-03-25";
        $atleta->modalidade = "Futsal";
        $atleta->categoria = "Adulto";
        $atleta->save();
        $this->expectException(QueryException::class);
    }
}
