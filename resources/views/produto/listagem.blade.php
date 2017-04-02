@extends('layout.principal')
@section('conteudo')
<h1>Listagem de produtos!</h1>

@if(old('nome'))
<div class="row card-panel green lighten-3">
	<div class="col s12 text-darken-2">
		Produto {{old('nome')}} Adicionado com sucesso!
		
	</div>  
</div>
@endif

<table class="bordered striped highlight">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Valor</th>			
			<th>Descrição</th>
			<th>Quantidade</th>
			<th>Tamanho</th>
			<th>Categoria</th>
			<th>Editar</th>			
			<th>Excluir</th>			
		</tr>
	</thead>
	<tbody>
		@foreach($produtos as $p)
			<tr class="{{$p->quantidade <=1 ? 'red' : ''}}">
				<td>{{$p->nome}}</td>
				<td>R$ {{$p->valor}}</td>
				<td>{{$p->descricao}}</td>
				<td>{{$p->quantidade}}</td>
				<td>{{$p->tamanho}}</td>
				<td>{{$p->categoria->nome}}</td>
				<td>
					<a href="<?php echo url('/produtos/mostra') . '/' . $p->id; ?>">
						 <i class="material-icons">search</i>					
					</a>					
				</td>
				<td>
					<a href="<?php echo url('/produtos/excluir') . '/' . $p->id; ?>">
						 <i class="material-icons">delete</i>					
					</a>					
				</td>
			</tr>
		@endforeach
	</tbody>
</table>


@stop
