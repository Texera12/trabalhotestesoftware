@extends('app')

@section('content')
	<div class="container-fluid">
		<h3>Editando Histórico</h3>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif
		
		{!! Form::open(['route' => ['historicos.update', $historico->id], 'method'=>'put']) !!}

			<div class="form-group">
				{!! Form::label('atleta_id', 'Atleta:') !!}
				{!! Form::select('atleta_id', \App\Atleta::orderBy('nome')->pluck('nome', 'id')->toArray(), $historico->atleta_id, ['class'=>'form-control', 'require']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('data', 'Data:') !!}
				{!! Form::text('data', $historico->data, ['class'=>'form-control', 'require']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hora', 'Hora:') !!}
				{!! Form::text('hora', $historico->hora, ['class'=>'form-control', 'require']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Criar Histórico', ['class'=>'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}

	</div>
@endsection