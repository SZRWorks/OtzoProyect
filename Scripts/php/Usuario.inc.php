<?php

class Usuario {
    
    private $id;
    private $nombre , $apellido_P, $apellido_M;
    private $correo;
    private $domicilio;
    private $telefono;
    private $password;
    
    function __construct($id, $nombre, $apellido_P, $apellido_M, $correo, $domicilio, $telefono, $password) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido_P = $apellido_P;
        $this->apellido_M = $apellido_M;
        $this->correo = $correo;
        $this->domicilio = $domicilio;
        $this->telefono = $telefono;
        $this->password = $password;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido_P() {
        return $this->apellido_P;
    }

    function getApellido_M() {
        return $this->apellido_M;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDomicilio() {
        return $this->domicilio;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setApellido_P($apellido_P): void {
        $this->apellido_P = $apellido_P;
    }

    function setApellido_M($apellido_M): void {
        $this->apellido_M = $apellido_M;
    }

    function setCorreo($correo): void {
        $this->correo = $correo;
    }

    function setDomicilio($domicilio): void {
        $this->domicilio = $domicilio;
    }

    function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }
    
    function getPassword() {
        return $this->password;
    }

    function setPassword($password): void {
        $this->password = $password;
    }
    
}