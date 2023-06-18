<?php
$nombre = $_POST['nombre'] ?? "nombreDefecto";
$contraseia = $_POST['contrasenia'] ?? "contraseniaDefecto";
/*toma el valor del radiobutton seleccionado */
$recordar = $_POST['recordar'] ?? "valorDefectoRecordar";
$norecordar = $_POST['recordar'] ?? "valorDefectoNorecordar";
$firstcheck = $_POST['firstcheck'] ?? "valorDefectofis";
$secondcheck = $_POST['secondcheck'] ?? "valorDefecto";
$resumen = $_POST['resumen'];
$pais = $_POST['pais'] ?? "1";
$cat = $_POST['cat'] ?? [];
foreach ($cat as $valor) {
  echo $valor . "<br>";
}
var_dump($_POST);
