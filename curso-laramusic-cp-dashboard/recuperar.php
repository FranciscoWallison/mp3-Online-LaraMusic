<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Recuperar - LaraMusic</title>

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


	<div class="login container">
		<div class="login-header">
			<img src="./imgs/laramusic-branca.png" alt="LaraMusic" class="logo-login">
		</div>
		<form class="col-md-12 login" action="painel.php" method="post">
			<div class="row">
				<div class="input-field col s12">
					<input id="email" type="email" class="validate">
					<label for="email" data-error="E-mail Invalido" data-success="E-mail Valido">Digite o E- mail</label>
				</div>
				<div class="input-field col s12">
					<input class="waves-effect waves-light btn btn-login" type="submit" name="enviar" value="Recuperar">
				</div>
				<div class="input-field col s12 recuperar-senha">
					<a href="index.php" class="recuperar-senha">
						Entrar?
					</a>
				</div>
			</div>
		</form>
	</div>

<!--jQuery-->
<script src="./assets/js/jquery-2.2.0.min.js"></script>

<!-- MATERIALIZE JavaScript -->
<script src="./assets/js/materialize.js"></script>

</body>
</html>