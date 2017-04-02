@extends('layout.principal')
@section('conteudo')

<h3>Detalhes do Produto {{$p->nome}}</h3>
<ul class="card-panel hoverable collection">
	<li class="collection-item">{{$p->nome}}</li>
	<li class="collection-item">{{$p->valor}}</li>
	<li class="collection-item">{{$p->descricao}}</li>
	<li class="collection-item">{{$p->quantidade}}</li>	
</ul>
<hr>
<a href="<?= url('/produtos')?>">Voltar</a>


@stop

