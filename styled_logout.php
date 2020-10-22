<?php
include_once 'Scripts/php/ControlSesion.inc.php';

include_once 'Templates/main_layout.php';
?>


<!-- Aplica el login dentro de la main_layout -->
<?php startblock("Body"); ?>

    <div align="center">
        <div class="card border-danger bg-primary text-light shadow" style="max-width: 550px; margin-top: 60px;">
            <div class="card-header text-center text-light">
                <span class="text-danger h2"> Cierre de sesion </span>
            </div>
            
            <div class="card-body">
                <?php
                if(ControlSesion::sesionIniciada()) {
                    ControlSesion:: cerrarSesion();
                    echo("

                        Sesion cerrada! <br> <br>
                        
                        ".
                        ' <button class="btn btn-secondary" onclick='.'"location.href = '."'/OtzoProyect/index.php'".'">Volver al Inicio</button>'
                    );
                }
                else {
                    echo("

                        Hey, parece que no hay ninguna sesion por aqui 0_o <br>

                        Para cerrar sesion primero debes iniciar una! <br> <br>

                        <p class='text-warning'> No puedo cerrar algo que no existe!! </p> <br>
                        
                        ".
                        ' <button class="btn btn-secondary" onclick='.'"location.href = '."'/OtzoProyect/index.php'".'">Volver al Inicio</button>'
                    );
                }
                ?>
            </div>
            
        </div>
    </div>

<?php endblock(); ?>

