<!DOCTYPE html>
<html lang="pt_BR">
	<head>

		<title>Controle de Estoque</title>
		<link rel="stylesheet" type="text/css" href="<?php echo url('/');?>/node_modules/materialize-css/css/materialize.min.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Sistema para Freelas e micro-jobs.">
		<meta name="keywords" content="freela micro-jobs encanador ">
		
	</head>
<body>

	

	<nav>
		<div class="nav-wrapper">
			<a href="#" class="brand-logo" style="padding: 8px;">
				<img src="<?php echo url('/');?>/img/laravel-2.svg" alt="Logo Laravel" style="width: 38px;">
			</a>
			
			

		
			<ul class="right hide-on-med-and-down">
	              <!-- 
		              <li><a href="sass.html">Sass</a></li>
		              <li><a href="badges.html">Components</a></li>
               		-->
	              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Opções<i class="material-icons right">arrow_drop_down</i></a>
	              	<ul id="dropdown1" class="dropdown-content">
	          		  @if (Auth::guest())
					    <li><a href="<?php echo url('/');?>/usuario/login">Login</a></li>
					    <li><a href="<?php echo url('/');?>/usuario/novo">Novo Usuario</a></li>
					  @else
					    <li>{{ Auth::user()->name }} </li>
					    <li><a href="<?php echo url('/');?>/usuario/logout">Logout</a></li>
					  @endif
	        		</ul>
	        	</li>
            </ul>
			
		</div>
	</nav>




	<div class="container">
		@yield('conteudo')
	</div>
		

	<script src="http://code.jquery.com/jquery-3.0.0.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo url('/');?>/node_modules/materialize-css/js/materialize.min.js"></script>	

	<script type="text/javascript">
		$(document).ready(function() {
		    $('select').material_select();
		});	
	</script>
	
</body>
</html>