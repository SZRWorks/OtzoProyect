<!DOCTYPE html>
<!-- Esto es un comentario: http://localhost/curso/index.php -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Agregar titulo a la pestaña -->
    <?php
        if(! isset($titulo) || empty($titulo)){
            $titulo = 'Otzo!';
        }
        echo "<title>$titulo</title>";
    ?>

    <!-- Get bootstrap -->
    <link rel="stylesheet" href="Scripts/css/bootstrap.min.css">
    <link rel="stylesheet" href="Scripts/css/main.css">
</head>
    






