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

<h3>Adicionar novo produto!</h3>
<form action="<?php echo url('/');?>/produtos/adiciona" method="post" class="col s12">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="row">
		<div class="input-field col s12">
			<input id="nome" name="nome" type="text" autofocus/>
			<label for="nome" class="active">Nome</label>
	    </div>
   	</div>

	<div class="row">
	    <div class="input-field col s12">
			<input id="valor" name="valor" type="tel"/>
			<label for="valor">Valor</label>
	    </div>
   	</div>

  	<div class="row">
		<div class="input-field col s12">
			<input id="tamanho" name="tamanho" type="text"/>
			<label for="tamanho">Tamanho</label>
		</div>
	</div>	


    <div class="row">
		<div class="input-field col s12">
			<textarea id="descricao" name="descricao" class="materialize-textarea"></textarea>
			<label for="descricao">Descrição</label>
		</div>
	</div>	    

	<div class="row">
	    <div class="input-field col s12">
			<input id="quantidade" name="quantidade" type="tel"/>
			<label for="quantidade">Quantidade</label>
	    </div>
   </div>

   	<div class="row">
   		<div class="input-field col s12">
			<select name="categoria_id">
				<option value="" disabled selected>Escolha a categoria</option>

				@foreach($categorias as $c)
					<option value="{{$c->id}}">{{$c->nome}}</option>
				@endforeach
				
		    </select>
		    <label>Categoria</label>
		  </div>

   </div>


   <div class="row">
	    <div class="input-field col s12">			
	    	<button type="submit" class="col s12 waves-effect waves-light btn-large">Adicionar</button>			
	    </div>
   </div>

</form>



@stop
