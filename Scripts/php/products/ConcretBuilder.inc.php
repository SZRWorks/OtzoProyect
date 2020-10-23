<?php

include_once 'Builder.inc.php';
include_once 'Product.inc.php';

 /* DECODIFICADOR DE IMG BLOB
$db = mysqli_connect("localhost","root","","Otzo"); //keep your db name
$sql = "SELECT * FROM producto WHERE id_Producto = 1";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['Imagen'] ).'" width="220"/>';
*/

class ConcretBuilder implements Builder {
    
    private $product;
    private $data;
    private $id;

    public function __construct(){
        $this->reset();
    }
    
    public function reset() {
        $this->product = new Product();
    }

    //Interface
    public function crearData($conexion, $id) {
        $this->id = $id;
        if (isset($conexion)) {
            try {
                $sql = 'SELECT '
                        . 'P.Titulo, P.Imagen, P.Precio, P.Descripcion AS "Producto", M.Nombre AS "Marca", C.Nombre AS "Categoria" '
                        . 'FROM mcporproducto X JOIN producto P ON X.id_Producto = P.id_Producto '
                        . 'JOIN Marca M ON X.id_Marca = M.id_Marca '
                        . 'JOIN Categoria C ON X.id_Categoria = C.id_Categoria WHERE X.id_producto = :id';
                
                $tempId = $id;
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':id', $tempId, PDO::PARAM_INT);
                $sentencia->execute();
                $this->data = $sentencia->fetch();
                $this->product->parts[] = array_merge($this->product->parts, $this->data);
            } catch (Exception $ex) {
                print "ERROR: ". $ex ->getMessage() . "<br>";
            }
        } else {
            echo "ERROR";
        }
    }

    public function crearCard(): void{
        echo '<div class="col-md-4"><div class="card bg-secondary" style="height: 550px; margin-bottom: 20px;">';
    }

    public function crearImagen(): void {
        echo '<img src="data:image/png;base64,'
        . base64_encode($this->data['Imagen']) . '" class="card-img-top" width="500" height="300" alt="...">';
    }

    public function crearTitulo(): void {
        echo '<div class="card-body"><h5 class="card-title">' . $this->data["Titulo"];
    }

    public function crearPrecio(): void {
        echo'  <b>$' . $this->data['Precio'] . '</b></h5>';
    }

    public function crearDescripcion(): void {
        echo '<p class="card-text" style="height: 50px;">' . $this->data['Producto'] . '</p><a href="styled_shop.php?id='. $this->id  .'" class="btn btn-primary">Agregar al Carrito</a></div>';
    }

    public function crearCategoria(): void {
        echo '<div class="card-footer"><p class="card-text"><small class="text-primary">' . $this->data['Categoria'] . ', ';
    }

    public function crearMarca(): void {
        echo $this->data['Marca'] . '</small></p></div></div></div>';
    }

    public function getProduct(){
        $result = $this->product;
        $this->reset();
        
        return $result;
    }
    
}
