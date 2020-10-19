<?php

class Director {
    
    private $builder;
    private $conexion;
    public  $limit;

    function __construct($builder, $conexion) {
        $this->builder = $builder;
        $this->conexion = $conexion;
        $this->limit = $this->defineLimit($conexion);
    }
    
    public function buildProduct($id){
        $this->builder->crearData($this->conexion, $id);
        $this->builder->crearCard();
        $this->builder->crearImagen();
        $this->builder->crearTitulo();
        $this->builder->crearPrecio();
        $this->builder->crearDescripcion();
        $this->builder->crearCategoria();
        $this->builder->crearMarca();
    }
    
    function getLimit() {
        return $this->limit;
    }
    
    private function defineLimit($conexion){
        return $conexion->query("SELECT COUNT(*) FROM producto")->fetchColumn();
    }
    
    function getBuilder() {
        return $this->builder;
    }

}
