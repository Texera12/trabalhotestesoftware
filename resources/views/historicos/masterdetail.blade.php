@extends('app')

@section('content')
	<div class="container-fluid">
		<h3>Novo Histórico</h3>

		@if ($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif
		
		{!! Form::open(['route' => 'historicos.masterdetail']) !!}

			<div class="form-group">
				{!! Form::label('data', 'Data:') !!}
				{!! Form::text('data', null, ['class'=>'form-control', 'require']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hora', 'Hora:') !!}
				{!! Form::text('hora', null, ['class'=>'form-control', 'require']) !!}
			</div>

			<hr/>

			<h4>Atletas</h4>

			<div class="input_fields_wrap"></div>
			<br>

			<button style="float:right;" class="add_field_button btn btn-success">Adicionar atleta</button>

			<br>
			<hr />

			<div class="form-group">
				{!! Form::submit('Criar Histórico', ['class'=>'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}

	</div>
@endsection


@section('dyn_scripts')
<script>
	$(document).ready(function(){
		var wrapper		= $(".input_fields_wrap");//fields wrapper
		var add_button 	= $(".add_field_button");

		$(add_button).click(function(e){
			var newfield = '<div><div style="width:94%; float:left" id="atleta">{!! Form::select("itens[]",\App\Atleta::orderBy("nome")->pluck("nome", "id")->toArray(), null, ["class"=>"form-control", "required", "placeholder"=>"Selecione um Atleta"]) !!}</div><button type="button" class="remove_field btn btn-danger bt-circle"><i class="fa fa-times"></button></div>';

			$(wrapper).append(newfield);
		});

		$(wrapper).on("click","remove_field", function(e){
			e.proventDefault(); $*(this).parent('div').remove();
		})
	});
</script>
@endsection
