@extends('adminlte::page')
@include('adminlte::layouts.partials.scripts')
@section('content')
	<div class="container">
		<h1>Novo Atleta</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li> {{ $error }}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['route' => 'atletas.store']) !!}

		<div class="form-group">
			{!! Form::label('nome', 'Nome') !!}
			{!! Form::text('nome', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
            {!! Form::label('sexo', 'Sexo: ') !!}
            {!! Form::select('sexo', array('Masculino' => 'Masculino', 'Feminino' => 'Feminino'), null, ['class'=>'form-control', 'placeholder' => 'Selecione o sexo']) !!}
        </div>

		<div class="form-group">
			{!! Form::label('dt_nasci', 'Data de Nascimento') !!}
			{!! Form::date('dt_nasci', '', ['class'=>'form-control']) !!}
		</div>

			<div class="form-group">
							{!! Form::label('categoria', 'Modalidade') !!}
			{!! Form::text('modalidade', null, ['class'=>'form-control']) !!}
			</div>


		<div class="form-group">
			{!! Form::label('categoria', 'Categoria') !!}
			{!! Form::text('categoria', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Criar Atleta', ['class'=>'btn btn-primary']) !!}
		</div>


		{!! Form::close() !!}

	</div>
@endsection