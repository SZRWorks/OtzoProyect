<?php
include_once 'Scripts/php/config.inc.php';
include_once 'Scripts/php/Conexion.inc.php';
include_once 'Scripts/php/Redireccion.inc.php';
include_once 'Scripts/php/RepositorioUsuario.inc.php';
include_once 'Scripts/php/ValidadorLogin.inc.php';
include_once 'Scripts/php/ControlSesion.inc.php';

if (ControlSesion::sesionIniciada()){
    Redireccion::redirigir('index.php');
}

if(isset($_POST['login'])){
    Conexion :: abrirConexion();
    
    $validador = new ValidadorLogin($_POST['email'], $_POST['clave'], Conexion :: getConexion());

    if(!$validador -> getError() == "" && !is_null($validador -> getUsuario())){
       ControlSesion :: IniciarSesion($validador -> getUsuario() -> getId(), $validador -> getUsuario() -> getNombre());
       //Redireccion::redirigir(SERVIDOR);
       Redireccion::redirigir('index.php');
    
    echo "Inicio Sesion Exitosa!";
    }

    Conexion :: cerrarConexion();
}

$titulo = 'Iniciar Sesion';

///// Remplazado en main_layout ////
//include_once './Templates/1-Apertura.inc.php';

include_once 'Templates/main_layout.php';
?>


<!-- Aplica el login dentro de la main_layout -->
<?php startblock("Body"); ?>

    <div align="center">
        <div class="card border-info bg-primary text-light shadow" style="max-width: 550px; margin-top: 20px;">
            <div class="card-header text-center text-light">
                <div class="text-right"> <button class="btn btn-danger" onclick="location.href = '/OtzoProyect/styled_register.php'">Sing Up</button>
                </div>
                <span class="text-success h2"> Login </span>
            </div>
            
            <div class="card-body">
                <!-- Agregar la platilla login de Claduio -->
                <?php include_once 'Scripts/php/login.inc.php' ?>
            </div>
            
        </div>
    </div>

<?php endblock(); ?>