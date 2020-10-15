<?php
include_once 'Usuario.inc.php';

class RepositorioUsuario{
    
    /*public static function obtenerTodo($conexion){
    
        $usuarios = array();
        
        if(isset($conexion)){
            try{
                
                include_once 'Usuario.inc.php';
                $sql = "select * from usuarios ";
                
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll(); 
                
                if(count($resultado)){
                    foreach ($resultado as $fila){
                        $usuarios[] = new Usuario(
                         $fila['id'], $fila['nombre'], $fila['email'],
                                $fila['password'],$fila['fecha_registro'],
                          $fila['activo']   
                        );
                    }
                }
                else{
                    echo "no hay usuarios";
                }
               
            } catch (PDOException $ex) {
                 print "ERROR: ". $ex ->getMessage() . "<br>";
            }
            
            return $usuarios;
        }
    }
    
    public static function ObtenerNumeroUsuarios($conexion){
        $total = null;
        
        if (isset($conexion)){
            
            try{
                $sql = "select count(*) as total from usuarios";
                
                $sentencia =  $conexion -> prepare($sql);
                $sentencia ->execute();
                $resultado = $sentencia -> fetch();
                
            $total = $resultado['total'];

            } catch (Exception $ex) {
                 print "ERROR: ". $ex ->getMessage() . "<br>";
            } 
            return $total;
        }
        
        
    }*/
    
    public static function insertarUsuario($conexion, $usuarios){
        $usuarioInsertado = false;
        
        if(isset($conexion)){
            try{
                $sql = "INSERT INTO usuarios (nombre, Apellido_P, Apellido_M, Correo, Domicilio, Telefono, Password) VALUES (:nombres, :apellido_p, :apellido_m, :email, :dom, :tel, :password)";
                
                $nombretemp = $usuarios->getNombre();
                $apellidoP = $usuarios->getApellido_P();
                $apellidoM = $usuarios->getApellido_M();
                $emailtemp = $usuarios->getCorreo();
                $domtemp = $usuarios->getDomicilio();
                $teltemp = $usuarios->getTelefono();
                $passwordtemp = $usuarios->getPassword();

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':nombres', $nombretemp, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido_p', $apellidoP, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido_m', $apellidoM, PDO::PARAM_STR);
                $sentencia->bindParam(':dom', $domtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':tel', $teltemp, PDO::PARAM_INT);
                $sentencia->bindParam(':email', $emailtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':password', $passwordtemp, PDO::PARAM_STR);

                $usuarioInsertado =  $sentencia -> execute();
               
            } catch (Exception $ex) {
                print "ERROR: ". $ex ->getMessage() . "<br>";
            }
        }
        
        return $usuarioInsertado;
    }
    
    public static function nombreExiste($conexion, $nombre){
        $nombreExiste = true;
        
        if(isset($conexion)){
            try{
                $sql = "SELECT * FROM usuarios WHERE Nombre = :nombre";

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                $nombreExiste = (count($resultado)) ? true : false;
            } catch (Exception $ex) {
                 print "ERROR: ". $ex ->getMessage() . "<br>";
            }
        }
        
        return $nombreExiste;
    }
    
     public static function EmailExiste($conexion, $email){
        $emailExiste = true;
        $emailtemp = $email;
        
        if(isset($conexion)){
            try{
                $sql = "SELECT * FROM usuarios WHERE Correo = :email";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':email', $emailtemp, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                $emailExiste = (count($resultado))? true : false;
                
            } catch (Exception $ex) {
                 print "ERROR: ". $ex ->getMessage() . "<br>";
            }
        }
        
        return $emailExiste;
    }
    
    
    public static function obtenerUsuarioEmail($conexion, $email){
        $usuario = null;
        
        if(isset($conexion)){
            try{
                $sql = "SELECT * FROM usuarios WHERE Correo = :email";
                
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia -> execute();
                
                $resultado = $sentencia->fetch();

                $usuario = (!empty($resultado))? new Usuario($resultado['id'], $resultado['nombre'], $resultado['Apellido_P'], $resultado['Apellido_M'], $resultado['email'], $resultado['Domicilio'], $resultado['Telefono'], $resultado['password']) : null;
            } catch (PDOException $ex) {
                print "ERROR: ". $ex ->getMessage() . "<br>";
            }
        }
        
       return $usuario;
    }
}
