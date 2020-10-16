<?php
include_once 'Scripts/php/config.inc.php';
include_once 'Scripts/php/Conexion.inc.php';
include_once 'Scripts/php/RepositorioUsuario.inc.php';
include_once 'Scripts/php/Redireccion.inc.php';

if(isset($_GET['nombre']) && !empty($_GET['nombre'])){
    $nombre = $_GET['nombre'];
}else{
    Redireccion :: redirigir('index.php');
}

$titulo = "Registro Correcto!";

include_once 'Templates/1-Apertura.inc.php';
//include_once 'Templates/3-Navbar.inc.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-ok"></span>             
                </div>
                <div class="panel-body text-center">
                    <p>Gracias por registrate <b><?php echo $nombre ?></b>!!</p>
                    <br>
                    <p><a href="<?php echo 'styled_login.php' ?>"> Inicia sesion Aqui!</a> para comenzar a usar tu cuenta</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 include_once 'Templates/2-Cierre.inc.php';
?>