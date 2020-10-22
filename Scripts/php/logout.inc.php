<?php
include_once 'Scripts/php/Redireccion.inc.php';
include_once 'Scripts/php/ControlSesion.inc.php';

include_once 'Templates/main_layout.php';

if (ControlSesion::sesionIniciada()){
    ControlSesion:: cerrarSesion();
}

Redireccion::redirigir('index.php');
?>




