@extends('app')
@include('adminlte::layouts.partials.scripts')
@section('content')
	<div class="container">
		<h1>Modalidades</h1>
	
		<table class="table table-stripe table-bordered table-houver">
			<thead>
				<tr>
					<th>Nome</th>
				</tr>
			</thead>
			<tbody>
				@foreach($modalidades as $mod)
					<tr>
						<td>{{ $mod->nome }}</td>

						<td>
							
							<a href="{{ route('modalidades.edit', ['id'=>$mod->id]) }}"
				        	   class="btn-sm btn-success">Editar</a>
				        	<a href="#" onclick="return ConfirmaExclusao({{$mod->id}})" 
				        		class="btn-sm btn-danger">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $modalidades->links() }}
		<br>
		<a href="{{ route('modalidades.create') }}" class="btn btn-info">Novo</a>
	</div>
@endsection

@section('table-delete')
"modalidades"
@endsection

