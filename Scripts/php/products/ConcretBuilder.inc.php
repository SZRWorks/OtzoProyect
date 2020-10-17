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
    
    public function crearCard(): void{
        
    }
    
    public function crearTitulo(): void{
        
    }
    
    public function crearPrecio(): void{
        
    }
    
    public function crearDescripcion(): void{
        
    }
    
    public function cierre(): void{
        
    }
    
    public function getProduct(){
        $result = $this->product;
        $this->reset();
        
        return $result;
    }
}
