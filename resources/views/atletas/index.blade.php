@extends('adminlte::page')
@include('adminlte::layouts.partials.scripts')
@section('content')
	<div class="container">

		@include('flash::message')

		<script>
          $('div.alert').not('.alert-important').delay(5000).fadeOut(350);
    	</script>

		<h1>Atletas</h1>

		{!! Form::open(['name'=>'form_name', 'route'=>'atletas']) !!}
		 <div class="$idebar-form">
	    	<div class="input-group input-group-lg">
	    		<input type="text" name="filtragem" class="form-control"
	    				style="width:100% !important;" placeholder="Pesquisa...">
	    	 	<span class="input-group-btn">
	    	 		<button type="submit" name="search" id="search-btn" class="btn btn-default">
	    	 			<i class="fa fa-search"></i>
	    	 		</button>
	    	 	</span>
	    	 </div>
	    </div>
	    <br>
	    {!! Form::close() !!}
	    
		<table class="table table-stripe table-bordered table-houver">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Data de Nascimento</th>
					<th>Modalidade</th>
					<th>Categoria</th>
				</tr>
			</thead>
			<tbody>
				@foreach($atletas as $atle)
					<tr>
						<td>{{ $atle->nome }}</td>
						<td>{{ $atle->sexo }}</td>
						<td>{{date( 'd/m/Y' , strtotime($atle->dt_nasci))}}</td>
						<td>{{ $atle->modalidade }}</td>
						<td>{{ $atle->categoria }}</td>

						<td>
							
							<a href="{{ route('atletas.edit', ['id'=>$atle->id]) }}"
				        	   class="btn-sm btn-success">Editar</a>
				        	<a href="{{ route('atletas.destroy', ['id'=>$atle->id]) }}" onclick="return confirm('O atleta {{$atle->nome}} será excluído. Deseja continuar ?')" class="btn-sm btn-danger"><i class="fa fa-trash-o " aria-hidden="true"></i> Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $atletas->links() }}
		<br>
		<a href="{{ route('atletas.create') }}" class="btn btn-info">Novo</a>
	</div>
@endsection

@section('table-delete')
"atletas"
@endsection

