<?php
		
						// Conectarse a y selecionar base de datos
						$mysqli = new mysqli("localhost", "root", "", "login");

						//Existe algun error en la conexión
						if ($mysqli->connect_errno) {

							echo "Lo sentimos, este sitio web está experimentado problemas.";

							exit;
						}


						//traspasamos a variables locales,para evitar complicaiones con las comillas:
						$username = $_POST["username"];
						$password = $_POST["password"];
						$query = "SELECT * FROM usuario WHERE username = '$username'";
						$result = mysqli_query($mysqli, $query);
						$count = mysqli_num_rows($result);

						if ($count == 0) {

							// Validamos que hayan llegado las variables(ingreso y/o gasto) y que no esten vacias
							if ($username and $password != "") {

								//preparamos la orden SQL
								$consulta = "INSERT INTO usuario (username, password) VALUES ('$username', '$password')";

								if (mysqli_query($mysqli,$consulta) ){

									?>
									<?php
									include("index.php");
									?>
									<h1>Registrado correctamente.</h1>
									<?php
								}
								else {

									?>
									<?php
									include("registro.php");
									?>
									<h1>Fallo al agregar registro.</h1>
									<?php
								}
							}
							else {
									?>
									<?php
									include("registro.php");
									?>
									<h1>Existen Campos Vacíos.</h1>
									<?php		
							}
						}
						else {
								?>
								<?php
								include("registro.php");
								?>
								<h1>El Usuario ya existe.</h1>
								<?php
						}

						$mysqli->close();

?>

