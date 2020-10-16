<?php include_once 'Templates/main_layout.php'; ?>


<!-- Aplica el login dentro de la main_layout -->
<?php startblock("Body"); ?>

    <div align="center">
        <div class="card border-info shadow" style="max-width: 550px; margin-top: 20px;">
            <div class="card-header text-center">
                <span class="text-success h2"> Registro Completado! </span>
            </div>
            
            <div class="card-body">
                <!-- Agregar la platilla login de Claduio -->
                <?php include_once 'registroCorrecto.php' ?>
            </div>
            
        </div>
    </div>

<?php endblock(); ?>