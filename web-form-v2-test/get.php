<?php
		
						// Conectarse a y selecionar base de datos
						$mysqli = new mysqli("192.168.43.51", "root", "docker", "formulario");

						//Existe algun error en la conexión
						if ($mysqli->connect_errno) {

							echo "Lo sentimos, este sitio web está experimentado problemas.";

							exit;
						}

						$consulta = "SELECT ingreso, gasto, fecha FROM registros";
						$result = $mysqli->query($consulta);

						if ($result->num_rows > 0) {
							echo "<table border='black' ><tr><th>Ingreso</th><th>Gasto</th><th>Fecha</th></tr>";
							$tot_ingreso = 0;
							$tot_gasto = 0;
							
							while ($row = $result->fetch_assoc()) {
								echo "<tr><td>".$row["ingreso"]."</td><td>".$row["gasto"]."</td><td>".$row["fecha"]."</td></tr>";
								$tot_ingreso += $row["ingreso"];
								$tot_gasto += $row["gasto"];
							}
							$util = $tot_ingreso - $tot_gasto;								
							echo "<tr><td>T.I: ".$tot_ingreso."</td><td>T.G: ".$tot_gasto."</td><td>UTIL: ".$util."</td></tr>";
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
