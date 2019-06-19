<?php

namespace App\Http\Controllers;

use App\Modalidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModalidadeRequest;

class ModalidadesController extends Controller
{
    public function index(){
    	$modalidades = Modalidade::orderBy('nome')->paginate(10);
    	return view('modalidades.index', ['modalidades'=>$modalidades]);
    }

    public function create() {
    	return view('modalidades.create');
    }

    public function store(ModalidadeRequest $request) {
    	$nova_modalidade = $request->all();
    	Modalidade::create($nova_modalidade);

    	return redirect()->route('modalidades');
    }

	public function destroy($id) {
        try{
            Modalidade::find($id)->delete();
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
    	$modalidade = Modalidade::find($id);
    	return view('modalidades.edit', compact('modalidade'));
    }

    public function update(ModalidadeRequest $request, $id) {
    	$modalidade = Modalidade::find($id)->update($request->all());
    	return redirect()->route('modalidades');
    }
}
