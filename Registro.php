<?php
include_once 'Scripts/php/conexion.inc.php';
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

include_once 'Templates/1-Apertura.inc.php';
//include_once 'Templates/3-Navbar.inc.php';

?>


<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Instruncciones</h3>
                </div>
                <div class="panel-body">
                    <p class="text-justify"> Instrucciones </p>
                    <br>
                    <a href="#">Ya tienes cuenta?</a>
                    <br>
                    <a href="#">Olvidaste tu contrasena?</a>
                </div>
            </div>
        </div>
            <div class="col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Introduce tus datos</h3>
                    </div>
                    <div class="panel-body">
                       <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <?php
                            if (isset($_POST['enviar'])) {
                                include_once 'Templates/5-registroValidado.inc.php';
                            } else {
                                include_once 'Templates/4-formularioVacio.inc.php';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
<?php
    include_once 'Templates/2-Cierre.inc.php';
 ?>
