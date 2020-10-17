<?php

include_once 'Builder.inc.php';

class ConcretBuilder implements Builder {
    
    private $product;
    
    public function reset(){
        $this->product = new Product();
    }
    
    public function __construct(){
        $this->reset();
    }
    
    //Interface
    public function crearCard(): void{
        
    }
    
    public function crearTitulo(): void{
        
    }
    
    public function crearPrecio(): void{
        
    }
    
    public function crearDescripcion(): void{
        
    }
    
    //Metodos propios
    public function cierre(): void{
        
    }
    
    public function getProduct(){
        $result = $this->product;
        $this->reset();
        
        return $result;
    }
}
