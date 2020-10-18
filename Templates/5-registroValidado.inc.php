<div class="form-group">
    <label>Nombre de usuario</label>
    <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre aqui!" value=<?php $validador->mostrarNombre() ?>>
    <?php
    $validador->mostrarErrorNombre();
    ?>  
</div>
<div class="form-group">
    <label>Nombre de usuario</label>
    <input type="text" class="form-control" name="ap" placeholder="Escribe tu Apellido Paterno aqui!">
    <?php
    $validador->mostrarErrorNombre();
    ?>  
</div>
<div class="form-group">
    <label>Nombre de usuario</label>
    <input type="text" class="form-control" name="am" placeholder="Escribe tu Apellido Materno aqui!">
    <?php
    $validador->mostrarErrorNombre();
    ?>  
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="ejemplo99@gmail.com" value=<?php $validador->mostrarEmail() ?>>
    <?php
    $validador->mostrarErrorEmail();
    ?>  
</div>
<div class="form-group">
    <label>Domicilio</label>
    <input type="text" class="form-control" name="dom" placeholder="Juarez 29">
    <?php
    $validador->mostrarErrorNombre();
    ?>  
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="number" class="form-control" name="tel" placeholder="1234567890" >
    <?php
    $validador->mostrarErrorTel();
    ?>  
</div>
<div class="form-group">
    <label>Contrasena</label>
    <input type="password" class="form-control" name="clave1" placeholder="Contrasena aqui!">
    <?php
    $validador->mostrarErrorClave1();
    ?>  
</div>
<div class="form-group">
    <label>Repite la Contrasena</label>
    <input type="password" class="form-control" name="clave2" placeholder="Repite la contrasena aqui!">
    <?php
    $validador->mostrarErrorClave2();
    ?>  
</div>
<br>
<button type="reset" class="btn btn-default">Limpiar</button>   
<button type="submit" class="btn btn-default" name="enviar">Enviar datos</button>  
