@extends('app')
@include('adminlte::layouts.partials.scripts')
@section('content')
	<div class="container">
		<h1>Categorias</h1>
	
		<table class="table table-stripe table-bordered table-houver">
			<thead>
				<tr>
					<th>Nome</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categorias as $cat)
					<tr>
						<td>{{ $cat->nome }}</td>

						<td>
							
							<a href="{{ route('categorias.edit', ['id'=>$cat->id]) }}"
				        	   class="btn-sm btn-success">Editar</a>
				        	<a href="#" onclick="return ConfirmaExclusao({{$cat->id}})" 
				        		class="btn-sm btn-danger">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $categorias->links() }}
		<br>
		<a href="{{ route('categorias.create') }}" class="btn btn-info">Novo</a>
	</div>
@endsection

@section('table-delete')
"modalidades"
@endsection
