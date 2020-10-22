<?php

class  ControlSesion {
    
    
    public static function IniciarSesion($id,$usuario){
       if (session_id() == '') {
            session_start();
        }
        
        $_SESSION['id'] = $id;
        $_SESSION['nombreUsuario'] = $usuario;
        $_SESSION['cart'][] = [];
    }
    
    
    public static function cerrarSesion(){
        if (session_id() == '') {
            session_start();
        }
        if(isset($_SESSION['id'])){
            unset($_SESSION['id']);
        }
        if(isset($_SESSION['nombreUsuario'])){
            unset($_SESSION['nombreUsuario']);
        }
        
        if(isset($_SESSION['cart'])){
            unset($_SESSION['cart']);
        }
        session_destroy();
    }
    
    public static function sesionIniciada(){
       if (session_id() == '') {
            session_start();
        }
        
        if(isset($_SESSION['nombreUsuario']) && isset($_SESSION['id']) && isset($_SESSION['cart'])){
            return true;    
        }else{
            return false;
        }
        
    }
}

?>
