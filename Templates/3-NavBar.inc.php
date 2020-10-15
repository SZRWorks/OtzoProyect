<?php
include_once 'Scripts/php/ControlSesion.inc.php';
include_once 'Scripts/php/config.inc.php';

Conexion:: abrirConexion();
//$total = RepositorioUsuario :: ObtenerNumeroUsuarios(conexion :: getConexion());

?>
<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este boton despliega la barra de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>  
                <a class="navbar-brand" href="index.php">¡¡Hola!!</a>
            </div>
            <div id="navbar"class="navbar-collapse collapse">
                <ul class="nav navbar-nav ">
                    <li><a href="#"> <span class="glyphicon glyphicon-star"></span> Favoritos</a></li>
                </ul>   
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(ControlSesion::sesionIniciada()){
                    ?>
                     <li>
                         <a href="#">
                             <span class="glyphicon  glyphicon-user">
                                 <?php echo ' '. $_SESSION['nombreUsuario']; ?>
                             </span>
                         </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon  glyphicon-user" aria-hidden="true"></span><span class="caret"></span> Gestor
                         </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        Entradas
                                    </a>
                                </li>
                                  <li>
                                    <a href="#">
                                        Comentarios
                                    </a>
                                </li>
                                  <li>
                                    <a href="#">
                                        Usuarios
                                    </a>
                                </li>
                                  <li>
                                    <a href="#">
                                        Favoritos
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li>
                            <a href="<?php echo RUTA_LOGOUT;?>" >
                                <span class="glyphicon  glyphicon-log-out"></span> Cerrar Sesion
                                </a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li><a href="#"> <span class="glyphicon glyphicon-user"></span> Usuarios registrados: <?php echo $total ?>
                                </a></li>
                            <li><a href="Login.php"> <span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a>
                            </li>
                            <li><a href="Registro.php"> <span class="glyphicon glyphicon-plus"></span> Registro</a>
                            </li>
                            <?php
                        }
                        ?>
                </ul>
            </div>
        </div>
</nav>
