<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div id="form-login">
		<h1>Login</h1>
		<form action="validar.php" method="post">

			<p>
				<label> Nombre de Usuario: </label>
				<input type="text" placeholder="username" name="username" />
			</p>

			<p>
				<label> Contraseña: </label>
				<input type="password" placeholder="contraseña" name="password" />
			</p>
			<p>
				<input type="submit" id="btn-login" value="Ingresar">
				<a id= "btn-reg" href="registro.php">Registrarse</a>
			</p>

		</form>
	</div>
</body>

</html>
