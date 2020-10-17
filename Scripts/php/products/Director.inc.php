<?php

class Director {
    
    private $builder;
    
    public function setBuilder(Builder $builder){
        $this->builder = $builder;
    }
    
    public function buildProduct(){
        $this->builder->crearCard();
        $this->builder->crearTitulo();
        $this->builder->crearPrecio();
        $this->builder->crearDescripcion();
    }
}
