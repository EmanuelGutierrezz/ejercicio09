<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>EjercicioProg</title>
</head>

<body>
  <form action="procesar.php" method="post">
    <label for="nombre">Usuario:</label><br>
    <input id="nombre" type="text"><br>
    <label for="contraseña">Contraseña:</label><br>
    <input id="contraseña" type="hidden">
    <input type="radio" id="recordar" name="radio">
    <label>No recordar contraseña</label><br>
    <input type="radio" id="Norecordar" name="radio">
    <label>Recordar contraseña</label><br>
    <input id="firstcheck" type="checkbox">
    <label for="">Recibir noticias</label><br>
    <input id="secondcheck" type="checkbox">
    <label for="">No recibir noticias</label><br>
    <label for="">Resuma su vida:</label><br>
    <textarea id="resumen" rows="4" cols="50"></textarea><br>
    <label for="">Pais de origen:</label><br>
    <select id="pais" name="pais">
      <option>Uruguay</option>
      <option>Argentina</option>
      <option>Brasil</option>
    </select><br>
    <input type="submit" value="enviar">
  </form>
  <a href="persona.php?nombre=Diego&apellido=Forlan">Perfil Jugador</a>
</body>

</html>