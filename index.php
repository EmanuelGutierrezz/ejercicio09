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
    <label for="nombre">Usuario:</label>
    <input id="nombre" type="text" value="nombre" name="nombre">
    <br>
    <!-- se envia un valor -->
    <input id="contrasenia" type="hidden" name="contrasenia" value="contrasenia">
    <br>
    <!-- deben llevar el mismo atributo name -->
    <input type="radio" id="recordar" name="recordar" value="Norecordar" checked>
    <label>No recordar contraseña</label><br>
    <input type="radio" id="Norecordar" name="recordar" value="Recordar">
    <label>Recordar contraseña</label><br>

    <!-- categorias que le gustan -->
    <input id="categorias" type="checkbox" name="cat[]" value="Deportes">Deportes
    <input id="firstcheck" type="checkbox" name="cat[]" value="Turismo">Turismo

    <textarea id="resumen" rows="4" cols="50" name="resumen">Resumen Defecto</textarea><br>

    <label for="">Pais de origen:</label>
    <br>
    <select id="pais" name="pais">
      <option selected value="1">Uruguay</option>
      <option value="2">Argentina</option>
      <option value="3">Brasil</option>
    </select><br>
    <input type="submit" value="enviar">
  </form>
  <a href="persona.php?nombre=Diego&apellido=Forlan">Perfil Jugador</a>
</body>

</html>