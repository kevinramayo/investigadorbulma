<?php
  require_once 'header.php';
  $error = $servicio = $nombre = $apellido = $correo = $contacto = $pago = "";

  if (isset($_POST['nombre']))
  {
    $nombre = sanitizeString($_POST['nombre']);
    $user = sanitizeString($_POST['user']);
    $servicio = sanitizeString($_POST['servicio']);
    $apellido = sanitizeString($_POST['apellido']);
    $correo = sanitizeString($_POST['correo']);
    $contacto = sanitizeString($_POST['contacto']);
    $pago = sanitizeString($_POST['pago']);

    if ($servicio == "" || $nombre == "" || $apellido == "" || $correo == "" || $contacto == "" || $pago == "")
      $error = 'No se llenaron todos los campos';
    else
      {
        queryMysql("INSERT INTO informacion (user,servicio,nombre,apellido,correo,contacto,pago) VALUES('$user','$servicio', '$nombre', '$apellido', '$correo', '$contacto', '$pago')");
          die('<h4>Datos Enviados</h4>Nos comunicaremos con usted para ajustar detalles.<h6>Gracias por confiar en Detectives privadosMX</h6>
          <img src="img/ok.gif" class="gif"></div></body></html>');
      }
    } 

echo <<<_END
      <form method='post' action='pagar.php'>
        <div>
          <label></label>
          <span class='error'>$error</span>
        </div>
        <br>
        <div class="pago">
        <div class='level'>
          <div class="control">
            <label>Nombre de Usuario</label>
            <input type="text" class="input is-success" placeholder="cambiar por un lista" maxlength='16' name='user' value="$user" readonly="readonly">
          </div>
          <div class="col-sm-4">
            <label for="inputState">servicio</label>
            <input type="text" class="input is-success" maxlength='18' name='servicio' value="$servicio">
          </div>
        </div>
        <br>
        <div class="level">
          <div>
            <label>Nombre/s</label>
            <input type="text" class="input is-success" placeholder="Nombre" maxlength='40' name='nombre' value="$nombre">
          </div>
          <div>
            <label>Apellidos</label>
            <input type="text" class="input is-success" placeholder="Apellido" maxlength='40' name='apellido' value="$apellido">
          </div>
        </div>
        <br>
        <div class="level">
          <div class="col-sm-8">
            <label>Correo Electronico</label>
            <input type="text" class="input is-success" placeholder="ejemplo@gmail.com" maxlength='40' name='correo' value="$correo">
          </div>
        
          <div class="col-sm-6">
            <label>Numero De Contacto</label>
            <input type="text" class="input is-success" placeholder="Numero de telefono/celular" maxlength='10' name='contacto' value="$contacto">
          </div>
        </div>
        <br>
        <div class="row justify-content-sm-center">
          <div class="col-sm-10">
          <h6 class="aviso">La informacion registrada nos sera de ayuda para poder contactarnos con usted, asegurese de llenar todos los campos de datos (Sus datos seran tratados como confidenciales).</h6>
          </div>
        </div>
        <br>

        <div class="nocentro">
          <div class="col-sm-3">
            <label>Metodos de pago</label>
            <img src="img/metodos.png" class="metodosdepago">
          </div>
        </div>
        <label class="nocentro">Fecha de expiracion</label>
        <form>
        <div class="level">
          <div class="col-4">
            <input type="text" class="input is-success" placeholder="Numero de tarjeta" maxlength='16' name='pago' value="$pago">
          </div>
          <div class="col-2">
            <input type="text" class="input is-success" placeholder="Mes">
          </div>
          <div class="col-2">
            <input type="text" class="input is-success" placeholder="Dia">
          </div>
          <div class="col-2">
            <input type="text" class="input is-success" placeholder="CVV/CVC">
          </div>
        </div>
        </form>
        <br>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Estoy deacuerdo con los <a href="#">Terminos y condiciones</a></label>
        </div>
        <label></label>
        <input class="button is-success is-light" type='submit' value='Realizar Pedido'>
        </div>
      </form>
        <br>
  </body>
</html>
_END;
?>