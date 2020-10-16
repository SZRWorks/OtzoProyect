<?php
include_once 'config.inc.php';
include_once 'Conexion.inc.php';
include_once 'Redireccion.inc.php';
include_once 'RepositorioUsuario.inc.php';
include_once 'ValidadorLogin.inc.php';
include_once 'ControlSesion.inc.php';

if (ControlSesion::sesionIniciada()){
    Redireccion::redirigir(SERVIDOR);
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


?>
<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <h3>Datos Aqui!</h3>
        <br>
        <label for="email"> Correo aqui:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                <?php if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email'])){
                    echo 'value="' . $_POST['email']. '"';
                }?>
                required autofocus/>
        <br>
        <label for="clave"> Clave aqui:</label>
    <input type="password" class="form-control" id="clave" name="clave" placeholder="Clave"required autofocus/>
        <br>
        <?php 
        if (isset($_POST['login'])){
            $validador -> mostrarError();
        }
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
            Iniciar Sesion!
        </button>
        <br>                          
        <p class="text-center">Necesitas ayuda con tu contraseña? <a href="#">Intentalo aqui</a></p>    
</form>
 <?php
    include_once './Templates/2-Cierre.inc.php';
  ?>
