<?php
		
						// Conectarse a y selecionar base de datos
						$mysqli = new mysqli("localhost", "root", "", "registros");

						//Existe algun error en la conexión
						if ($mysqli->connect_errno) {

							echo "Lo sentimos, este sitio web está experimentado problemas.";

							exit;
						}


						// Validamos que hayan llegado las variables(ingreso y/o gasto) y que no esten vacias
						if ($_POST["ingreso"] !="" and $_POST["ingreso"] >= 0) {

							//traspasamos a variables locales,para evitar complicaiones con las comillas:
							$ingreso = $_POST["ingreso"];

							//preparamos la orden SQL
							$consulta = "INSERT INTO ingresos (ingreso) VALUES ('$ingreso')";

							if (mysqli_query($mysqli,$consulta) ){

								?>
								<?php
								include("index.html");
								?>
								echo '<script>alert("Ingreso Registrado Correctamente")</script>';
								<?php
							}
							else {

								?>
								<?php
								include("index.html");
								?>
								echo '<script>alert("Fallo al Registrar Ingreso")</script>';
								<?php
							}
						}

						else  {
							?>
							<?php
							include("index.html");
							?>
							echo '<script>alert("Campo Ingreso Ej: 25000")</script>';
							<?php
						}

						$mysqli->close();

?>
