<?php
include_once 'Scripts/php/config.inc.php';
include_once 'Scripts/php/Conexion.inc.php';
include_once 'Scripts/php/Redireccion.inc.php';
include_once 'Scripts/php/RepositorioUsuario.inc.php';
include_once 'Scripts/php/ValidadorLogin.inc.php';
include_once 'Scripts/php/ControlSesion.inc.php';



if (ControlSesion::sesionIniciada()){
    Redireccion::redirigir(SERVIDOR);
}

if(isset($_POST['login'])){
    Conexion :: abrirConexion();
    
    $validador = new ValidadorLogin($_POST['email'], $_POST['clave'], Conexion :: getConexion());

    if(!is_null($validador -> getUsuario())){
       ControlSesion :: IniciarSesion($validador -> getUsuario() -> getId(), $validador -> getUsuario() -> getNombre());
       Redireccion::redirigir(SERVIDOR);
    } else {
        echo $validador->getError();
    }

    Conexion :: cerrarConexion();
    
}

$titulo = 'Iniciar Sesion';

include_once 'Templates/1-Apertura.inc.php';
//include_once 'Templates/3-Navbar.inc.php';


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h2>Inicia Sesion, porfavor!</h2>
                </div>
                <div class="panel-body text-left te">
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
                          <p class="text-center">Necesitas ayuda con tu contrasena? <a href="#">Intentalo aqui</a></p>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php
    include_once 'Templates/2-Cierre.inc.php';
  ?>
