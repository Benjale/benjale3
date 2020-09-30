<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT nombre_n FROM navieras;";
	$result = $db -> prepare($query);
	$result -> execute();
	$navieras = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Nombre</th>
    </tr>
  <?php
	foreach ($navieras as $nav) {
  		echo "<tr> <td>$nav[0]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
