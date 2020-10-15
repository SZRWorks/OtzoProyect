<?php

include_once 'RepositorioUsuario.inc.php';
include_once 'Pin.inc.php';

class checkRegistro {

    private $nombre;
    private $email;
    private $clave;
    private $errorNombre;
    private $errorEmail;
    private $errorClave1;
    private $errorClave2;
    private $errorTel;
    private $avisoInicio;
    private $avisoCierre;
    private $ap, $am, $dom;
    private $tel;

    public function __construct($nombre, $ap, $am, $email, $dom, $tel, $clave1, $clave2, $conexion) {
        $this->avisoInicio = "<br><div class='alert alert-danger' role='alert'>";
        $this->avisoCierre = "</div>";
        $this->nombre = "";
        $this->ap = "";
        $this->am = "";
        $this->email = "";
        $this->clave = "";
        $this->tel = 0;
        $this->dom = "";

        $this->errorTel = $this->validarTel($tel);
        $this->errorNombre = $this->validarNombre($conexion, $nombre);
        $this->errorEmail = $this->validarEmail($conexion, $email);
        $this->errorClave1 = $this->validarClave1($clave1);
        $this->errorClave2 = $this->validarClave2($clave1, $clave2);


        if ($this->errorClave1 === "" && $this->errorClave2 === "") {
            $this->clave = $clave1;
        }
    }

    private function variableIniciable($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    
    private function validarTel($tel){
        if(!$this->variableIniciable($tel)){
            return "Debes de escribir un numero";
        } else {
            $Pin = new Pin($tel, Pin::NUM_TEL);
            if($Pin->Verify()){
                $this->tel = $tel;
                return "";
            }
            return "Numero no valido";
        }
    }

    private function validarNombre($conexion, $nombre) {
        if (!$this->variableIniciable($nombre)) {
            return "debes de escribir un nombre de usuario.";
        } else {
            $this->nombre = $nombre;
        }

       /*NOMBRE DE USUARIOS COMUNES 
        *  if (strlen($nombre) < 6) {
            return "El nombre debe ser mas largo de 6 caracteres";
        }
        if (strlen($nombre) > 24) {
            return "El nombre es demasiado largo";
        }

        if (RepositorioUsuario ::nombreExiste($conexion, $nombre)) {
            return "Este nombre de usuario ya existe!";
        }*/
        
        return "";
    }

    private function validarEmail($conexion, $email) {
        if (!$this->variableIniciable($email)) {
            return "Debes proprocionar un email";
        } else {
            $this->email = $email;
        }
        if (RepositorioUsuario ::emailExiste($conexion, $email)) {
            return 'Este email ya existe! o <a href="">Intente recuperar su cuenta</a>';
        }
        return "";
    }

    private function validarClave1($clave1) {
        if (!$this->variableIniciable($clave1)) {
            return "escribe de nuevo la contrasena";
        }
        return "";
    }

    private function validarClave2($clave1, $clave2) {
        if (!$this->variableIniciable($clave1)) {
            return "primero debes escribir la contrasena";
        }
        if (!$this->variableIniciable($clave2)) {
            return "escribe de nuevo la contrasena";
        }
        if ($clave1 !== $clave2) {
            return "Ambas contrasenas deben coincidir";
        }
        return "";
    }

    public function getNombre() {
        return $this->nombre;
    }
    
    function getAp() {
        return $this->ap;
    }

    function getAm() {
        return $this->am;
    }

    function getTel() {
        return $this->tel;
    }
    
    function getDom() {
        return $this->dom;
    }

    function getClave() {
        return $this->clave;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getErrorNombre() {
        return $this->errorNombre;
    }

    function getErrorTel() {
        return $this->errorTel;
    }

    public function getErrorEmail() {
        return $this->errorEmail;
    }

    public function getErrorClave1() {
        return $this->errorClave1;
    }

    public function getErrorClave2() {
        return $this->errorClave2;
    }

    public function mostrarNombre() {
        if ($this->nombre !== "") {
            echo $this->nombre;
        }
    }

    public function mostrarEmail() {
        if ($this->email !== "") {
            echo $this->email;
        }
    }
    
    public function mostrarErrorTel(){
        if($this->errorTel !== ""){
            echo $this->avisoInicio . $this->errorTel . $this->avisoCierre;
        }
    }
    
    public function mostrarErrorNombre() {
        if ($this->errorNombre !== "") {
            echo $this->avisoInicio . $this->errorNombre . $this->avisoCierre;
        }
    }

    public function mostrarErrorEmail() {
        if ($this->errorEmail !== "") {
            echo $this->avisoInicio . $this->errorEmail . $this->avisoCierre;
        }
    }

    public function mostrarErrorClave1() {
        if ($this->errorClave1 !== "") {
            echo $this->avisoInicio . $this->errorClave1 . $this->avisoCierre;
        }
    }

    public function mostrarErrorClave2() {
        if ($this->errorClave2 !== "") {
            echo $this->avisoInicio . $this->errorClave2 . $this->avisoCierre;
        }
    }

    public function registroValido() {
        if ($this->errorNombre === "" && $this->errorEmail === "" && $this->errorClave1 === "" && $this->errorClave2 === "") {
            return true;
        } else {
            return false;
        }
    }

}
