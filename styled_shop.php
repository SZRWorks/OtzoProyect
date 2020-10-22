<?php
    include_once 'Scripts/php/Conexion.inc.php';
    include_once 'Scripts/php/products/ConcretBuilder.inc.php';
    include_once 'Scripts/php/products/Director.inc.php';
    include_once 'Scripts/php/cart/Carrito.inc.php';
    include_once 'Scripts/php/ControlSesion.inc.php';
    

    $id = filter_input(INPUT_GET, 'id');
    
    if (isset($id)) {
        Carrito::getInstance()->add($id);
    }


Conexion::abrirConexion();
    $builder = new ConcretBuilder();
    $director = new Director($builder, Conexion::getConexion());
   
    
    $titulo = "Tienda";
    include_once 'Templates/main_layout.php';
    startblock("Body");
?>

<div class="card bg-light border border-warning shadow" style="border-radius: 5px; min-height: 750px;">
    <!-- Titulo de la tarjeta -->
    <div class="card-header text-center">
        <span class="text-warning h1" style="font-family: sans-serif;">
            Tienda
        </span>
    </div>

    <!-- Cuerpo de la tarjeta -->
    <blockquote class="blockquote mb-0">
        <div class="content-section">
            <br><br>
            <div class="container">
                <?php
                echo '<div class="row">';
                    for ($i = 1; $i <= $director->getLimit(); $i++) {
                            $director->buildProduct($i);
                    }
                echo '</div>';
                ?>
            </div>
        </div>
    </blockquote>
</div>

<?php
    endblock();
    include_once 'Templates/2-Cierre.inc.php';
 ?>
