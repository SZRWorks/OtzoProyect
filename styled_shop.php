<?php
    include_once 'Scripts/php/Conexion.inc.php';
    //include_once 'Templates/1-Apertura.inc.php';
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
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <!-- Titulo del item -->
                                        <h5 class="card-title">Card title</h5>

                                        <!-- Cuerpo del item -->
                                        <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to additional content. 
                                        This content is a little bit longer.
                                        </p>
                                        
                                        <!-- Actualizacion del item -->
                                        <p class="card-text"><small class="text-muted">
                                        Last updated 3 mins ago
                                        </small></p>
                                    </div>
                                </div>

                                <!-- Icono del item -->
                                <div class="col-md-4">
                                    <img src="Imagenes/EPICFoxIcon.gif" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="Imagenes/EPICFoxIcon.gif" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="Imagenes/EPICFoxIcon.gif" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </blockquote>

<?php
    endblock();
    include_once 'Templates/2-Cierre.inc.php';
 ?>
