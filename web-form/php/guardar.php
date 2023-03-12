<?php
		
						// Conectarse a y selecionar base de datos
						$mysqli = new mysqli("http://192.168.43.51", "root", "docker", "formulario");

						//Existe algun error en la conexión
						if ($mysqli->connect_errno) {

							echo "Lo sentimos, este sitio web está experimentado problemas.";

							exit;
						}


						// Validamos que hayan llegado las variables(ingreso y/o gasto) y que no esten vacias
						if ($_POST["ingreso"] !="") {

							//traspasamos a variables locales,para evitar complicaiones con las comillas:
							$ingreso = $_POST["ingreso"];

							//preparamos la orden SQL
							$consulta = "INSERT INTO registros (ingreso) VALUES ('$ingreso')";

							if (mysqli_query($mysqli,$consulta) ){

								echo "<p>Registro agregado.</p>";
							}
							else {

								echo "<p>Fallo al agregar registro</p>";
							}
						}

						else {

							echo 'Por favor, complete el <a href="../index.html">Formulario</a></p>';
						}

?>