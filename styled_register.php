<?php
include_once 'Scripts/php/Conexion.inc.php';
include_once 'Scripts/php/Usuario.inc.php';
include_once 'Scripts/php/RepositorioUsuario.inc.php';
include_once 'Scripts/php/checkRegistro.inc.php';
include_once 'Scripts/php/Redireccion.inc.php';



if (isset($_POST['enviar'])){

    Conexion :: abrirConexion();
    
    $validador = new checkRegistro($_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['email'], $_POST['dom'],$_POST['tel'] ,$_POST['clave1'],$_POST['clave2'], Conexion :: getConexion());

    if($validador -> registroValido()){
        $usuario = new Usuario('', $validador-> getNombre(), $validador-> getAp(), $validador -> getAm(), $validador-> getEmail(), $validador-> getDom(), $validador->getTel(), password_hash($validador-> getClave(), PASSWORD_DEFAULT));
        $usuarioInsertado = RepositorioUsuario :: insertarUsuario(Conexion :: getConexion(), $usuario);
        
        if($usuarioInsertado){
            //Redirigir a registro-correcto
            //Redireccion::redirigir(RUTA_REGISTRO_CORRECTO. '?nombre='. $validador->getNombre());
            Redireccion::redirigir('registroCorrecto.php?nombre='.$validador->getNombre());            
        }  
    Conexion :: cerrarConexion();  
    }
    
}

$titulo = 'Registro';

///// Remplazado en main_layout ////
//include_once './Templates/1-Apertura.inc.php';

include_once 'Templates/main_layout.php';

?>


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