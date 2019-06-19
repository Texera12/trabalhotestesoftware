@extends('app')

@section('content')
	<div class="container">
		<h1>Editando Categoria: {{ $categoria->nome }}</h1>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<li> {{ $error }}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['route' =>["categorias.update", $categoria->id],
						'method'=>'put']) !!}

		<div class="form-group">
			{!! Form::label('nome', 'Nome') !!}
			{!! Form::text('nome', $categoria->nome, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Categoria', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>
@endsection