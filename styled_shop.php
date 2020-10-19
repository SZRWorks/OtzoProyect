<?php
    include_once 'Scripts/php/Conexion.inc.php';
    include_once 'Scripts/php/products/ConcretBuilder.inc.php';
    include_once 'Scripts/php/products/Director.inc.php';

    
    Conexion::abrirConexion();
    $builder = new ConcretBuilder();
    $director = new Director($builder, Conexion::getConexion());
   
    

    
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
        <div>
        </div>
        <div class="content-section">
            <br><br>
            <div class="container">
                <?php
                echo '<div class="row">';
                for ($i = 1; $i <= 3; $i++) {
                    $director->buildProduct($i);
                }
                echo '</div>';

                ?>
            </div>
        </div>
    </blockquote>

<?php
    endblock();
    include_once 'Templates/2-Cierre.inc.php';
 ?>
