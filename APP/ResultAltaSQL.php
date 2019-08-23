<?php
// Cargamos el marco superior de páginas
   require_once('marcosup.php'); 
   
echo "<center><h2>Resultado de la sentencia SQL tecleada.</h2>";

// Recoge la sentencia enviada mediante método POST
$sentencia=$_POST['sentencia'];

echo "<center><br> Sentencia SQL:   <h4><font color=#00af00>
      <b><i>$sentencia</i></b></font>.
      <br></h4></center>";

    // Ejecuta la sentencia SQL tecleada por el usuario
          $resultado=mysqli_query($c, "$sentencia");


// Cerramos la conexion
mysqli_close($c);

// Cargamos el marco inferior de páginas
   require_once('marcoinf.php');
?>

