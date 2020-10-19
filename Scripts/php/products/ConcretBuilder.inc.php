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

    public function __construct(){
        $this->reset();
    }
    
    public function reset() {
        $this->product = new Product();
    }

    //Interface
    public function crearData($conexion, $id) {
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
            } catch (Exception $ex) {
                print "ERROR: ". $ex ->getMessage() . "<br>";
            }
        } else {
            echo "ERROR";
        }
    }

    public function crearCard(): void{
        echo '<div class="col-xl-4">
                        <div class="card mb-3" style="height: 350px;">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="card-body">';
    }
    
    public function crearTitulo(): void{
        echo '<h5 class="card-title">' . $this->data["Titulo"];
    }
    
    public function crearPrecio(): void{
        echo'  <b>$'. $this->data['Precio'] . '</b></h5>';
    }
    
    public function crearDescripcion(): void{
        echo '<p class="card-text">'. $this->data['Producto'] . '</p>';
    }
    
    public function crearCategoria(): void{
        echo '<p class="card-text"><small class="text-muted">'. $this->data['Categoria'] . ', ';
    }
    
    public function crearMarca(): void{
       echo $this->data['Marca'] . '</small></p></div></div>'; 
    }
    
    public function crearImagen(): void{
       echo '<div class="col-md-4"> <img src="data:image/png;base64,' 
                . base64_encode($this->data['Imagen']) . '" class="card-img" alt="..."></div></div></div></div>'; 
    }
    
    public function getProduct(){
        $result = $this->product;
        $this->reset();
        
        return $result;
    }
    
}
