<?php
include_once 'RepositorioUsuario.inc.php';

class ValidadorLogin{
    
    private $usuario;
    private $error;

    public function __construct($email,$clave,$conexion){
        $this-> error = "";
        
        if(!$this-> variableIniciable($email) || !$this-> variableIniciable($clave)){
            $this-> usuario = null;
            $this-> error = "Debes introducir tu email y tu contraseña";
        }else{
            $this-> usuario = RepositorioUsuario ::obtenerUsuarioEmail($conexion, $email);
        
            if(is_null($this->usuario) || !password_verify($clave, $this->usuario-> getPassword())){
                $this-> error = "Datos Incorrectos";
            }else{
                $this-> error="";
            }
        }
    }
    
    private function variableIniciable($variable){
        if (isset($variable) && !empty($variable)){
            return true;
        } else {
            return false;
        }
    }
       
    function getUsuario() {
        return $this->usuario;
    }

    function getError() {
        return $this->error;
    }
    
    public function MostrarError(){       
        if($this-> error !== ""){
            echo "<br><div class='alert alert-danger' role='alert'>";
            echo $this-> error;
            echo "</div><br>";
        }
    }
}
