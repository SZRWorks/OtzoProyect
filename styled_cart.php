<?php
include_once 'Scripts/php/ControlSesion.inc.php';
include_once 'Scripts/php/Redireccion.inc.php';

if (!ControlSesion::sesionIniciada()) {
    Redireccion::redirigir('index.php');
    echo 'Todo mal ?';
}

include_once 'Scripts/php/Conexion.inc.php';
include_once 'Scripts/php/cart/Carrito.inc.php';

Conexion::abrirConexion();
$carrito = Carrito::getInstance();

$id = filter_input(INPUT_GET, 'id');
$cantidad = filter_input(INPUT_GET, 'cantidad');
$eliminar = filter_input(INPUT_GET, 'eliminar');
$clean = filter_input(INPUT_GET, 'clean');
$buy = filter_input(INPUT_GET, 'buy');

if (isset($id) and isset($cantidad)){
    $carrito->setValue($id,$cantidad);
}

if(isset($eliminar)){
    $carrito->del($eliminar);
}

if(isset($clean)){
    $carrito->clean();
}



$titulo = 'Carrito';

include_once 'Templates/main_layout.php';
startblock("Body");
?>
<div class="card bg-primary border border-info shadow" style="border-radius: 5px; min-height: 750px;">
    <!-- Titulo de la tarjeta -->
    <div class="card-header text-center">
        <span class="text-light h1" style="font-family: sans-serif;">
            Carrito
        </span>
    </div>

    <!-- Cuerpo del carrito -->
    <blockquote class="blockquote mb-0">
        <div class="content-section">
            <br><br>
            <div class="container">
                <?php
                    $carrito->crearTabla(Conexion::getConexion());
                ?>
            </div>
            <form class="form-inline">
                <button type="submit" name="clean" value="1" class="btn btn-danger">Limpiar</button>
                <button type="submit" name="buy" value="1" class="btn btn-info">Comprar</button>
            </form>
        </div>
    </blockquote>
</div>

<?php
    endblock();
    include_once 'Templates/2-Cierre.inc.php';
 ?>

