<?php
		
						// Conectarse a y selecionar base de datos
						$mysqli = new mysqli("localhost", "root", "", "registros");

						//Existe algun error en la conexión
						if ($mysqli->connect_errno) {

							echo "Lo sentimos, este sitio web está experimentado problemas.";

							exit;
						}


						// Validamos que hayan llegado las variables(ingreso y/o gasto) y que no esten vacias
						if ($_POST["gasto"] != "" and $_POST["gasto"] >= 0) {

							//traspasamos a variables locales,para evitar complicaiones con las comillas:
							$gasto = $_POST["gasto"];

							//preparamos la orden SQL
							$consulta_gastos_table = "INSERT INTO gastos (gasto) VALUES ('$gasto')";
							$consulta_registros_table = "INSERT INTO registros (gasto) VALUES ('$gasto')";

							$query_insert_gasto = mysqli_query($mysqli,$consulta_gastos_table);
							$query_insert_registro = mysqli_query($mysqli,$consulta_registros_table);	

							if ($query_insert_gasto and $query_insert_registro){

								?>
								<?php
								include("gastos.html");
								?>
								echo '<script>alert("Gasto registrado exitosamente")</script>';
								<?php
							}
							else {

								?>
								<?php
								include("gastos.html");
								?>
								echo '<script>alert("Fallo al Registrar Gasto):")</script>';
								<?php
							}
						}

						else {
								?>
								<?php
								include("gastos.html");
								?>
								echo '<script>alert("Campo de Gasto Ej: 32500")</script>';
								<?php
						}
						
						$mysqli->close();
?>
