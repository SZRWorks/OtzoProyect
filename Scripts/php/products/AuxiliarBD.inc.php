<?php 

/*
 * DECODIFICADOR DE IMG BLOB
$db = mysqli_connect("localhost","root","","Otzo"); //keep your db name
$sql = "SELECT * FROM producto WHERE id_Producto = 1";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['Imagen'] ).'" width="220"/>';
*/

class AuxiliarBD {
    
    private $id;
    
    public function __construct ($id){
        $this->id = $id;
    }
    
    private function getData(){
        $data = array();
    }
    
    
    
}
