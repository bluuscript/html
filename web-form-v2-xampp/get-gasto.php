<?php
		
						// Conectarse a y selecionar base de datos
						$mysqli = new mysqli("localhost", "root", "", "registros");

						//Existe algun error en la conexión
						if ($mysqli->connect_errno) {

							echo "Lo sentimos, este sitio web está experimentado problemas.";

							exit;
						}

						$consulta = "SELECT gasto, fecha FROM gastos";
						$result = $mysqli->query($consulta);

						if ($result->num_rows > 0) {
							echo "<table border='black' ><tr><th>Gasto</th><th>Fecha</th></tr>";
							$tot_gasto = 0;
							
							while ($row = $result->fetch_assoc()) {
								echo "<tr><td>".$row["gasto"]."</td><td>".$row["fecha"]."</td></tr>";
								$tot_gasto += $row["gasto"];
							}
							// $util = $tot_ingreso - $tot_gasto;								
							echo "<tr><td>Total Gasto: ".$tot_gasto."</td></tr>";
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
