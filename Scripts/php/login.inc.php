

<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <h3>Datos de Inicio.</h3>
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
        <button class="btn btn-lg btn-success btn-block" type="submit" name="login">
            Iniciar Sesion!
        </button>
        <br>                          
        <p class="text-center">¿Necesitas ayuda con tu contraseña? <a href="/OtzoProyect/styled_workInProgress.php">Intentalo aqui</a></p>    
</form>
 <?php
    include_once './Templates/2-Cierre.inc.php';
  ?>
