<?php include_once 'Templates/main_layout.php'; ?>


<!-- Aplica un titulo a la main_layout -->
<?php startblock("Title"); ?>
    Otzo | Login
<?php endblock(); ?>

<!-- Aplica el login dentro de la main_layout -->
<?php startblock("Body"); ?>

    <div align="center">
        <div class="card border-info shadow" style="max-width: 550px; margin-top: 20px;">
            <div class="card-header text-center">
                <div class="text-right"> <button class="btn btn-danger" onclick="location.href = '/OtzoProyect/styled_register.php'">Sing Up</button>
                </div>
                <span class="text-success h2"> Login </span>
            </div>
            
            <div class="card-body">
                <!-- Agregar la platilla login de Claduio -->
                <?php include_once 'login.php' ?>
            </div>
            
        </div>
    </div>

<?php endblock(); ?>