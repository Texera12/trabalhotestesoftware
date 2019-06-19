@extends('app')
@include('adminlte::layouts.partials.scripts')
@section('content')
	<div class="container">
		<h1>Historico Atleta</h1>
	
		<table class="table table-stripe table-bordered table-houver">
	    		<tr>
	    			<th>Data</th>
	    			<th>Atleta(s)</th>
	    			
	    		</tr>
	    	</thead>
			<tbody>
				@foreach($historicos as $hist)
		    		<tr>
				        <td>{{$hist->data}}</td>
				        <td>{{$hist->nome}}

				        	<td>
				        		@foreach($hist->historico_atletas as $atle)
				        			<li>{{ $atle->atleta->nome }}</li>
				        		@endforeach
				        	</td>

				        <td>

				        	<a href="{{ route('historicos.edit', ['id'=>$hist->id]) }}"
				        	   class="btn-sm btn-success">Editar</a>
				        	<a href="{{ route('historicos.destroy', ['id'=>$hist->id]) }}"
				        	   class="btn-sm btn-danger">Excluir</a>
				        </td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
		<br>
		<a href="{{ route('historicos.create') }}" class="btn btn-info">Novo</a>
		<a href="{{ route('historicos.createmaster') }}" class="btn btn-info">Novo Create Master</a>
	</div>
@endsection

@section('table-delete')
"atletas"
@endsection
