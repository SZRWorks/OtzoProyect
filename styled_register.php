<?php include_once 'Templates/main_layout.php'; ?>


<!-- Aplica el register dentro de la main_layout -->
<?php startblock("Body"); ?>
    <div align="center">
        <div class="card border-info shadow" style="max-width: 850px; margin-top: 20px;">

            <div class="card-header text-center">
                <div class="text-right"> <button class="btn btn-danger" onclick="location.href = '/OtzoProyect/styled_login.php'">Login</button>
                </div>
                <span class="text-success h2"> Registro </span>
            </div>
            
            <div class="card-body">
                <!-- Agregar la platilla register de Claduio -->
                <?php include_once 'Scripts/php/Registro.inc.php' ?>
            </div>
            
        </div>
    </div>

<?php endblock(); ?>