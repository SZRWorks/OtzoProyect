<?php
include_once 'Scripts/php/ControlSesion.inc.php';

include_once 'Templates/main_layout.php';
?>


<!-- Aplica el login dentro de la main_layout -->
<?php startblock("Body"); ?>

    <div align="center">
        <div class="card border-danger bg-primary text-light shadow" style="max-width: 550px; margin-top: 60px;">
            <div class="card-header text-center text-light">
                <span class="text-danger h2">  No has ingresado!  </span>
            </div>
            
            <div class="card-body">
                <h2 class="text-warning"> Ups! 0_o</h2> <br>

                Inicia sesion primero. <br>

                Que tal si iniciamos? <br> <br>

                <button class="btn btn-success text-light" onclick="location.href='styled_login.php'">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
                    </svg> Login
                </button>
            </div>
            
        </div>
    </div>

<?php endblock(); ?>

