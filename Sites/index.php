<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Consultoría Buques Yales</h1>
  <p style="text-align:center;">Aquí podrás encontrar todo tipo de información sobre los distintos buques y sus características.</p>

  <br>

  <h3 align="center"> Ver los nombres de todas las navieras </h3>

  <form align="center" action="consultas/consulta_nombres_naviera.php" method="post">
    <input type="submit" value="Mostrar">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center"> ¿Quieres buscar un buque por su naviera?</h3>

  <form align="center" action="consultas/consulta_buque_naviera.php" method="post">
    Nombre:
    <input type="text" name="nombre_naviera">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>

  <br>
  <br>
  <br>

  <h3 align="center">  ¿Quieres buscar un buque según su puerto y año?</h3>

  <form align="center" action="consultas/consulta_buque_puerto_año.php" method="post">
    Puerto:
    <input type="text" name="puerto">
    <br/><br/>
    <input type="submit" value="Buscar">
    Año:
    <input type="text" name="año">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3 align="center">¿Quieres buscar todos los pokemones por tipo?</h3>

  <?php
  #Primero obtenemos todos los tipos de pokemones
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT tipo FROM pokemones;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_tipo.php" method="post">
    Seleccinar un tipo:
    <select name="tipo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar por tipo">
  </form>

  <br>
  <br>
  <br>
  <br>
</body>
</html>
