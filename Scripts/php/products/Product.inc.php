<?php

class Product {
    
    public $parts = [];
    
    public function listParts(){
        echo implode("" , $this->parts) . "\n";
    }
}
