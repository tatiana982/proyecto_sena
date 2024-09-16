<?php

session_start();

if (!isset($_SESSION["active"])) {
  header("location: ingresar.php");
  die();
}

if (isset($_SESSION["active"]) && $_SESSION["rol"] != 'usuario') {
  header("location: admin.php");
  die();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio | Andres Remodelaciones</title>
  <link rel="stylesheet" href="../css/inicio.css">
</head>

<body>
  <?php if (isset($_GET["mensaje"])) : ?>
    <div id="mensaje">
      <strong>Exito</strong>
      <span><?= $_GET["mensaje"] ?></span>
    </div>
  <?php endif ?>

  <div id="header_usuario">
    <h1>Bienvenido a tu cuenta!</h1>
    <p>A continuación podrás ver el catalogo de servicios que ofrecemos</p>
    <form method="GET" action="../controller/salir.php">
      <button type="submit">Cerrar Sesión</button>
    </form>
  </div>

  <div id="contenedor_catalogos">
    <h4>Listado de catalogos</h4>
    <?php
    require_once "../conexion/conn.php";

    $db = database::conectar();

    $statement = $db->query("SELECT * FROM catalogo");

    echo "<ul>";

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

      echo "
        <li>
          <h4>" . $row["nombre"] . "</h4>
          <img width='100' height='100' src='" . $row['imagen'] . "' />
        </li>
      ";
    }

    echo "</ul>";
    ?>
  </div>
</body>

</html>