<?php
		
						// Conectarse a y selecionar base de datos
						$mysqli = new mysqli("localhost", "root", "", "registros");

						//Existe algun error en la conexión
						if ($mysqli->connect_errno) {

							echo "Lo sentimos, este sitio web está experimentado problemas.";

							exit;
						}

						$consulta = "SELECT ingreso, fecha FROM ingresos";
						$result = $mysqli->query($consulta);

						if ($result->num_rows > 0) {
							echo "<table border='black' ><tr><th>Ingreso</th><th>Fecha</th></tr>";
							$tot_ingreso = 0;
							//$tot_gasto = 0;
							
							while ($row = $result->fetch_assoc()) {
								echo "<tr><td>".$row["ingreso"]."</td><td>".$row["fecha"]."</td></tr>";
								$tot_ingreso += $row["ingreso"];
								//$tot_gasto += $row["gasto"];
							}
							//$util = $tot_ingreso - $tot_gasto;								
							echo "<tr><td>Total Ingreso: ".$tot_ingreso."</td></tr>";
							echo "</table>";
						}
						else {

							?>
							<?php
							include("index.html");
							?>
							echo '<script>alert("No Existen Registros")</script>';
							<?php

						}

						$mysqli->close();

?>
