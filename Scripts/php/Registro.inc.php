

<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Ayuda: </h3>
                </div>
                <div class="panel-body">
                    <br>
                    <a href="/OtzoProyect/styled_login.php">¿Ya tienes cuenta?</a>
                    <br>
                    <a href="/OtzoProyect/styled_workInProgress.php">¿Olvidaste tu contrasena?</a>
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
    include_once './Templates/2-Cierre.inc.php';
 ?>
