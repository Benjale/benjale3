<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$puerto = $_POST["puerto"];

 	$query = "SELECT personal.pid, personal.nombre, personal.pasaporte FROM buques, atraques, personal where buques.bid = atraques.bid AND buques.bid = personal.bid AND personal.genero = 'mujer' AND personal.pid = buques.pid_capitan AND lower(atraques.puerto) = lower('$puerto');";
	$result = $db -> prepare($query);
	$result -> execute();
	$capitanas = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Pid Capitán</th>
      <th>Nombre</th>
      <th>Pasaporte</th>
    </tr>
  <?php
	foreach ($capitanas as $cap) {
  		echo "<tr> <td>$cap[0]</td> <td>$cap[1]</td> <td>$cap[2]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
