<?php
// Cargamos el marco superior de páginas
   require_once('marcosup.php'); 
?>
<script>
document.getElementById('notificacion').innerHTML='<p><img src="estilos/logo.jpg" height="20px"/> - ALTA MASIVA</p>'; 
</script>

<?php

echo "      <br><br><center><b><font color=#30309f>Escriba una sentencia SQL:";
echo " </font></b>";
echo "      <br><form method='POST' action='ResultAltaSQL.php'>";
echo '              <textarea name="sentencia" rows=10 cols=100></textarea>';
echo "              <BR><input type='submit' value='EJECUTAR'>";
echo "          </form> </center><br><br>";
// cerramos la conexión...
        mysqli_close($c);
       

// Cargamos el marco inferior de páginas
   require_once('marcoinf.php');        
?>
