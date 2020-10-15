<?php

class Redireccion{
    
    public static function redirigir($URL){
        header("Location:". $URL, true, 301);
        exit();
    }
}