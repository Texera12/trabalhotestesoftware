@extends('app')

@section('content')
	<div class="container">
		<h1>Editando Modalidade: {{ $modalidade->nome }}</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li> {{ $error }}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['route' =>["modalidades.update", $modalidade->id],
						'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('nome', 'Nome') !!}
			{!! Form::text('nome', $modalidade->nome, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Modalidade', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>
@endsection