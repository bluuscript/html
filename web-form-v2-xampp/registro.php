<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div id= "form-registro">
		<h1>Registro</h1>
		<form action="post.php" method="post">

			<p>
				<label> Usuario: </label>
				<input type="text" placeholder="Ingrese username" name="username" />
			</p>

			<p>
				<label> Contraseña: </label>
				<input type="password" placeholder="Ingrese contraseña" name="password" />
			</p>
			<p>
				<input type="submit" id="btn-registro" value="Registrarse">
				
				<a id="btn-reg" href="login.php">Login</a>
			</p>
		</form>
	</div>
</body>
</html>
