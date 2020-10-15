<?php
include_once 'index.php';

if(ControlSesion::sesionIniciada()){
    ControlSesion:: cerrarSesion();
}



