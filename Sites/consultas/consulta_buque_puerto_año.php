<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $puerto = $_POST["puerto"];
  $año = $_POST["año"];

  $query = "SELECT buques.bid, nombre, patente, buques.pais, num_personas, did_naviera, pid_capitan FROM buques, atraques WHERE atraques.bid = buques.bid AND lower(atraques.puerto) LIKE lower('%$puerto%') AND EXTRACT(YEAR FROM atraques.fecha) ='$año';";
  $result = $db -> prepare($query);
  $result -> execute();
  $buques = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
  <tr>
    <th>BID</th>
    <th>Nombre</th>
    <th>Patente</th>
    <th>País</th>
    <th>Capacidad de personas</th>
    <th>DID</th>
    <th>PID cpitán</th>
  </tr>
  <?php
  foreach ($buques as $buque) {
    echo "<tr> <td>$buque[0]</td> <td>$buque[1]</td> <td>$buque[2]</td> <td>$buque[3]</td> <td>$buque[4]</td> <td>$buque[5]</td> <td>$buque[6]</td> </tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
