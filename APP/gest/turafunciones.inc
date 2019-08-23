<?php
################################################
#### Menú Principal #
#
#
function principal()
{
echo '
<ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.php">Inicio</a>
            </li>
            <li>
              <a href="servicios.php">Servicios</a>
            </li>			
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión 
			  <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Empresas</a>
                </li>
                <li>
                  <a href="#">Demandantes</a>
                </li>
                <li>
                  <a href="AltaSQL.php">Alta masiva SQL</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">Consulta</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="#">Listados</a>
                </li>		
              </ul>
            </li>
            <li>
              <a href="ayuda.php">Ayuda</a>
            </li>
            <li>
              <a href="contacto.php">Contacto</a>
            </li>
            <li>
              <a href="#">Entrar</a>
            </li>			
          </ul>';
		 
}

################################################
#### Menú Secundario #
#
#
function secundario()
{
   	   echo '<div class="navbar navbar-default">';
       echo '<div class="container">';
	   echo '<ul class="nav navbar-nav navbar-right">';
       echo '    <li>';
       echo '       <a href="#">Demandantes</a>';
       echo '     </li>';
       echo '     <li>';
       echo '       <a href="#">Empresas</a>';
       echo '     </li>';            
       echo '     <li>';
       echo '       <a href="#">Ofertas</a>';
       echo '    </li>';
       echo '     <li>';
       echo '       <a href="#">Buscar</a>';
       echo '     </li>';
       echo '</ul>';
	   echo '</div>';
	   echo '</div>';
}

################################################
#### Menú LISTADOS #
#
#
function listados()
{
// Submenú de opciones que se muestra en la zona de Notificaciones
echo '<div class="navbar navbar-default">';
echo '<div class="container">';
echo '
<ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">Opción 1</a>
            </li>
            <li>
              <a href="#">Opción 2</a>
            </li>	           
            <li>
              <a href="#">Opción 3</a>
            </li>
            <li>
              <a href="#">Opción 4</a>
            </li>
          </ul>
	';
		echo "</div>";		  
		echo "</div>";
}
################################################
################################################
#### Menú para el acceso restringido a la aplicación #
#
#
function menubackend()
{
       echo '<ul  class="nav navbar-nav navbar-right">';
			echo '<li> · </li>';
			echo '<li><a href="index-B.php">Inicio </a> </li>';
			echo '<li><a href="#">Gestión Empresas </a> </li>';
			echo '<li><a href="#">Gestión Demandantes </a> </li>';
			echo '<li><a href="#">Gestión Ofertas </a> </li>';
			echo '<li><a href="#">Gestión Usuarios </a> </li>';
			echo '<li><a href="../salir.php">SALIR </a> </li>';
			echo '<li> · </li>';
       echo '</ul>';
}
################################################
?>
