<?php

interface Builder {
    
    public function crearData($conexion, $id);
    public function crearCard(): void;
    public function crearTitulo(): void;
    public function crearPrecio(): void;
    public function crearDescripcion(): void;
    public function crearCategoria(): void;
    public function crearMarca(): void;
    public function crearImagen(): void;
    
}
