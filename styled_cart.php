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
        </div>
    </blockquote>
</div>

<?php
    endblock();
    include_once 'Templates/2-Cierre.inc.php';
 ?>

