<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaRequest;

class CategoriasController extends Controller
{
    public function index(){
    	$categorias = Categoria::orderBy('nome')->paginate(10);
    	return view('categorias.index', ['categorias'=>$categorias]);
    }

    public function create() {
    	return view('categorias.create');
    }

    public function store(CategoriaRequest $request) {
    	$nova_categoria = $request->all();
    	Categoria::create($nova_categoria);

    	return redirect()->route('categorias');
    }

	public function destroy($id) {
        try{
            Categoria::find($id)->delete();
            $ret = array('status'=>'ok', 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>'erro', 'msg'=>$e->getMessage());
        }
        catch (\PDOException $e) {
            $ret = array('status'=>'erro', 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id) {
    	$categoria = Categoria::find($id);
    	return view('categorias.edit', compact('categoria'));
    }

    public function update(CategoriaRequest $request, $id) {
    	$categoria = Categoria::find($id)->update($request->all());
    	return redirect()->route('categorias');
    }
}
