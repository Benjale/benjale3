<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$naviera_name = $_POST["nombre_naviera"];

 	$query = "SELECT buques.bid, nombre, patente, buques.pais, num_personas, did_naviera, pid_capitan FROM buques, navieras WHERE navieras.did = buques.did_naviera AND LOWER(navieras.nombre_n) LIKE LOWER('%$naviera_name%');";
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Bid</th>
      <th>Nombre</th>
      <th>Patente</th>
      <th>País</th>
      <th>Capacidad de personas</th>
      <th>Did</th>
      <th>Pid cpitán</th>
    </tr>
  <?php
	foreach ($buques as $buque) {
  		echo "<tr> <td>$buque[0]</td> <td>$buque[1]</td> <td>$buque[2]</td> <td>$buque[3]</td> <td>$buque[4]</td> <td>$buque[5]</td> <td>$buque[6]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
