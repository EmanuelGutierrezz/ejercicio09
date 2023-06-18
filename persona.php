<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Perfil</h1>
  <a href="index.php">ir a pagina principal</a>
  <?php
  $nombre = $_GET['nombre'] ?? "nombreDefecto";
  $apellido = $_GET['apellido'] ?? "apellidoDefecto";
  ?>
  <p>nombre <?= $nombre; ?></p>
  <p></p>
  <p>apellido <?= $apellido; ?></p>
</body>

</html>