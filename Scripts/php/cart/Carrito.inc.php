<?php

class Carrito {

    private static $instances = [];

    //Singlenton
    public static function getInstance(): Carrito {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    //Acciones Carrito
    public function add($producto) {
        session_start();
        if(array_key_exists($producto,  $_SESSION["cart"])) {
            $_SESSION['cart'][$producto]++;
        } else {
            $_SESSION['cart'][$producto] = 1;
        }
    }
    
    
    function existenDatosEnSesion() {
        return isset($_SESSION['cart']) && is_array($_SESSION['cart']);
    }

    public function del($producto) {
        unset($_SESSION['cart'][$producto]);
    }

    public function setValue($producto, $value) {
        $_SESSION['cart'][$producto] = $value;
    }

    public function clean() {
        unset($_SESSION['cart']);
    }

    public function buy() {
        
    }

    //Fin Acciones Carrito

    public function crearTabla($conexion) {
        echo '<table class="table table-bordered">'
        . '<thead class="thead-light">
                    <tr>
                      <th scope="col">Producto</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">Controles</th>
                    </tr>
                    </thead>
                    <tbody>';
        if($this->existenDatosEnSesion()){
            foreach ($_SESSION['cart'] as $id => $cantidad) {
                if($id != 0)
                    $this->trProduct($conexion, $id, $cantidad);
            }
        }
        echo '</tbody></table>';
    }

    private function trProduct($conexion, $id, $cantidad) {
        $sql = 'SELECT Titulo, Precio FROM producto WHERE id_Producto = :id';
        $sentencia = $conexion->prepare($sql);
        $tempid = $id;
        $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
        $sentencia->execute();
        $data = $sentencia->fetch();
        echo '<tr>'
        . '<td>' . $data['Titulo'] . '</td>'
        . '<td>$' . $data['Precio'] . '</td>'
        . '<td>' . $cantidad . '</td>'
        . '<td> + - </td>'
        . '</tr>';
    }

    public function transformToJSON() {
        
    }

}
