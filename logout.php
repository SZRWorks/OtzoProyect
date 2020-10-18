<?php
include_once 'Scripts/php/Redireccion.inc.php';
include_once 'Scripts/php/ControlSesion.inc.php';

if(ControlSesion::sesionIniciada()){
    ControlSesion:: cerrarSesion();
}

Redireccion::redirigir('index.php');



