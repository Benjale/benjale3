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
    Año:
    <input type="text" name="año">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3 align="center">¿Quieres buscar capitanas según su puerto?</h3>

  <form align="center" action="consultas/consulta_capitana_puerto.php" method="post">
    Puerto:
    <input type="text" name="puerto">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3 align="center">Ver el buque pesquero con mayor tripulación</h3>

  <form align="center" action="consultas/consulta_max_tripulacion.php" method="post">
    <input type="submit" value="Mostrar">
  </form>

  <br>
  <br>
  <br>
  <br>
</body>
</html>
