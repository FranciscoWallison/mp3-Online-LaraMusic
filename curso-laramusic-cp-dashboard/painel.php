<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CP - LaraMusic</title>

	<!--MATERIALIZE-->
	<link rel="stylesheet" href="./assets/css/materialize.min.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="./assets/css/bootstrap-theme.min.css">

	<!--PERSON CSS-->
	<link rel="stylesheet" href="./assets/css/laramusic-cp.css">
	
	<!--FONTS-->
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">

	<!--FAVICON-->
	<link rel="icon"  type="image/png" href="./imgs/favicon-laramusic.png">
	
</head>
<body>
<div class="menu">
	<ul class="menu col-md-12">
		<li class="col-md-2 text-center">
			<a href="home" >
				<img src="./imgs/laramusic-branca.png" alt="LaraMusic" class="logo">
				<h1></h1>
			</a>
		</li>
		<li class="col-md-2 text-center">
			<a href="relatorios" >
				<img src="./imgs/estilos-laramusic.png" alt="estilos" class="img-menu">
				<h1>Estilos</h1>
			</a>
		</li>
		<li class="col-md-2 text-center">
			<a href="relatorios" >
				<img src="./imgs/albuns-laramusic.png" alt="albuns" class="img-menu">
				<h1>Albuns</h1>
			</a>
		</li>
		<li class="col-md-2 text-center">
			<a href="relatorios" >
				<img src="./imgs/music-laramusic.png" alt="musicas" class="img-menu">
				<h1>Músicas</h1>
			</a>
		</li>
		<li class="col-md-2 text-center">
			<a href="relatorios" >
				<img src="./imgs/perfil-laramusic.png" alt="perfil" class="img-menu" >
				<h1>Perfil</h1>
			</a>
		</li>
		<li class="col-md-2 text-center">
			<a href="relatorios" >
				<img class="img-menu" src="./imgs/sair-laramusic.png" alt="sair">
				<h1>Sair</h1>
			</a>
		</li>
	</ul>
</div><!--END-MENU-->

<div class="clear"></div>

<div class="actions">
	<div class="container">
		<div class="col-md-6 inline">
			<a href="forms" class="add tooltipped" data-html="true" data-position="right" data-delay="50" data-tooltip="Adicionar Usuário">
				<i class="fa fa-plus-circle"></i>
			</a>
		</div>
		<div class="col-md-6 pesquisar" >
			<form action="" class="form-search form form-inline input-field col">
				<input type="text" id="consultar" name="pesquisar" class="form-control pesquisar">
				<label for="consultar">
					Pesquisar
				</label>
				<input type="submit" name="pesquisar" value="Encontrar" class="waves-effect Default btn red">
			</form>
		</div>
	</div>
</div><!--END-ACTIONS-->

<div class="clear"></div>
	<!--Content Dinâmico-->
	<?php
	if(isset($_GET['prm'])){
		if(file_exists("pags/{$_GET['prm']}.php"))
			include_once "pags/{$_GET['prm']}.php";
		else 
			include_once 'pags/404.php';
	} else {
		include_once "pags/home.php";
	}
	?>

<div class="clear"></div>

<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">LaraMusic</h5>
				<p class="grey-text text-lighten-4"></p>
			</div>
			<div class="col l4 offset-l2 s12">
				<ul>
					<li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-facebook"></i></a></li>
					<li><a class="grey-text text-lighten-3" href="#!"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2016 Copyright Francisco Wallison
		</div>
	</div>
</footer>


<!--jQuery-->
<script src="./assets/js/jquery-2.2.0.min.js"></script>

<!-- MATERIALIZE JavaScript -->
<script src="./assets/js/materialize.js"></script>

<script type="text/javascript">

	//Relatório do Sistema efeitos
	var options = [
    	{
    		selector: '#relatorio-si', offset: 300, callback: function(el)
    		{
		        Materialize.toast(" Relatórios do Sistema!", 1500);
		        $("#call-6").velocity({ backgroundColor: "#333", color: "#ef5350" }, {duration: 10});
        	} 
    	},

      ];

      Materialize.scrollFire(options);

      $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 80 // Creates a dropdown of 15 years to control year
	  });

</script>


</body>
</html>