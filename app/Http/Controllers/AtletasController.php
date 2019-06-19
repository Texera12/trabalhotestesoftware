<?php

namespace App\Http\Controllers;

use App\Atleta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AtletaRequest;

class AtletasController extends Controller
{
    public function index(Request $filtro){
        $filtragem = $filtro->get('filtragem');
        if ($filtragem == null)
    	   $atletas = Atleta::orderBy('nome')->paginate(10);
        else
            $atletas = Atleta::where('nome', 'like', '%'.$filtragem.'%')->orderBy("nome")->paginate(20);

    	return view('atletas.index', ['atletas'=>$atletas]);
    }

    public function create() {
    	return view('atletas.create');
    }

    public function store(AtletaRequest $request) {
    	$novo_atleta = $request->all();
    	Atleta::create($novo_atleta);

    	return redirect()->route('atletas');
    }

	public function destroy($id) {
        Atleta::find($id)->delete();
        flash('Atleta excluído com sucesso!')->success();
        return redirect('atletas');
    }

    public function edit($id) {
    	$atleta = Atleta::find($id);
    	return view('atletas.edit', compact('atleta'));
    }

    public function update(AtletaRequest $request, $id) {
    	$atleta = Atleta::find($id)->update($request->all());
    	return redirect()->route('atletas');
    }
}
