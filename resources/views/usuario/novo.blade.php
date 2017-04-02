@extends('layout.principal')
@section('conteudo')

@foreach($errors->all() as $error)
	@if($errors->all())
	<div class="row card-panel red lighten-3">
		<ul class="col s12 text-darken-2">
			<li>{{$error}}</li>
		</ul>	
	</div>
	@endif
@endforeach

<h3>Criar Usuario!</h3>
<form action="<?php echo url('/');?>/usuario/novo" method="post" class="col s12">
	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<div class="row">
		<div class="input-field col s12">
			<input id="name" name="name" type="text" autofocus/>
			<label for="name" class="active">Nome</label>
	    </div>
   	</div>


	<div class="row">
		<div class="input-field col s12">
			<input id="email" name="email" type="email"/>
			<label for="email" >Email</label>
	    </div>
   	</div>

	<div class="row">
	    <div class="input-field col s12">
			<input id="senha" name="password" type="password"/>
			<label for="senha">Senha</label>
	    </div>
   	</div>

   <div class="row">
	    <div class="input-field col s12">			
	    	<button type="submit" class="col s12 waves-effect waves-light btn-large">Login</button>			
	    </div>
   </div>

</form>

@stop
