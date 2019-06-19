@extends('adminlte::page')
@include('adminlte::layouts.partials.scripts')
@section('content')
	<div class="container">
		<h1>Editando Atleta: {{$atleta->nome}}</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li> {{ $error }}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['route' =>["atletas.update", $atleta->id],
						'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('nome', 'Nome') !!}
			{!! Form::text('nome', $atleta->nome, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
                {!! Form::label('sexo', 'Sexo: *') !!}
                {!! Form::select('sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'), $atleta->sexo, ['class'=>'form-control']) !!}
         </div>

		<div class="form-group">
			{!! Form::label('dt_nasci', 'Data de Nascimento') !!}
			{!! Form::date('dt_nasci', $atleta->dt_nasci, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('modalidade', 'Modalidade') !!}
			{!! Form::text('modalidade', $atleta->modalidade, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::text('categoria', $atleta->categoria, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Atleta', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>
@endsection