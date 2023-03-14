<?php

	$usuario = $_POST["username"];
	$password = $_POST["password"];

	session_start();

	$_SESSION["usuario"]=$usuario;

	$conn = new mysqli("192.168.43.51", "root", "docker", "login");

	$consulta = "SELECT username, password FROM usuario WHERE username = '$usuario' and password = '$password'";
	$result = mysqli_query($conn, $consulta);

	$filas = mysqli_num_rows($result);

	if ($filas) {
		header("location:index.html");
	}else {
		?>
		<?php
		include("index.php");
		?>
		<h1 class="bad">ERROR EN LA AUTENTIFICACIÓN</h1>
		<?php

	}
	mysqli_free_result($result);
	$conn->close();
