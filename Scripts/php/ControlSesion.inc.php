<?php

class  ControlSesion {
    
    
    public static function IniciarSesion($id,$usuario){
       if (session_id() == '') {
            session_start();
        }
        
        $_SESSION['id'] = $id;
        $_SESSION['nombreUsuario'] = $usuario;
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
        session_destroy();
    }
    
    public static function sesionIniciada(){
       if (session_id() == '') {
            session_start();
        }
        
        if(isset($_SESSION['nombreUsuario']) && isset($_SESSION['id']) ){
            return true;    
        }else{
            return false;
        }
        
    }
}
