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
        if(ControlSesion::SesionIniciada()){
            if(array_key_exists($producto,  $_SESSION["cart"])) {
                $_SESSION['cart'][$producto]++;
            } else {
                $_SESSION['cart'][$producto] = 1;
            }
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 0; margin: 0;">
                    <strong>Exito!</strong> Se añadio el producto a tu carrito.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        } else {
           echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius: 0; margin: 0;">
                    <strong>Holy Guacamole!</strong> Tienes que iniciar sesion primero para usar el carrito.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    }
    
    
    function existenDatosEnSesion() {
        return isset($_SESSION['cart']) && is_array($_SESSION['cart']);
    }

    public function del($producto) {
        if(ControlSesion::SesionIniciada()){
            if(array_key_exists($producto,  $_SESSION["cart"])){
                unset($_SESSION['cart'][$producto]);
            }
        }
    }

    public function setValue($producto, $value) {
        if(ControlSesion::SesionIniciada()) {
            if(array_key_exists($producto,  $_SESSION["cart"])){
                $_SESSION['cart'][$producto] = $value;
            }
        }
    }

    public function clean() {
        unset($_SESSION['cart']);
        $_SESSION['cart'][] = [];
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
            unset($_SESSION['cart'][0]);
            foreach ($_SESSION['cart'] as $id => $cantidad) {
                    $this->trProduct($conexion, $id, $cantidad);
            }
        }
        echo '</tbody></table>';
    }

    private function trProduct($conexion, $id, $cantidad) {
        $sql = 'SELECT Titulo, Precio FROM producto WHERE id_Producto = :id';
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
        $sentencia->execute();
        $data = $sentencia->fetch();
        echo '<tr>'
        . '<td>' . $data['Titulo'] . '</td>'
        . '<td>$' . $data['Precio'] . '</td>'
        . '<td><form><input type="number" value="' . $cantidad . '" name="cantidad"><input type="hidden" name="id" value="'.$id.'" /></form></td>'
        . '<td><a class="btn btn-primary" href="styled_cart.php?eliminar='.$id.'" role="button">Eliminar</a></td>'
        . '</tr>';
    }

    public function transformToJSON() {
        
    }

}
