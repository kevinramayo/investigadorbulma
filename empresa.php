<?php
  require_once 'header.php';

echo <<<_END
        <br>
        <h1 class="titulos2">Detectives Privados Empresariales</h1>
        <h2 class="titulos">Investigaciones Empresariales</h2>
        <br>
        <br>
          <div class="car">
          <div>
          <div class='level'>
            <div>
                <img src="img/empresa.jpg" class="imginfe" alt="...">
            </div>
            <div>
              <img src="img/empresa2.jpg" class="imginfe" alt="...">
            </div>
            <div>
              <img src="img/empresa3.jpg" class="imginfe" alt="...">
            </div>
          </div>
        </div>
            <div class="card-body">
              <h2 class="card-title">Informacion sobre el servicio</h2>
            </div>
          </div>

      <br>
      <div class="card">
      <div class="col-sm-5">
        <div class="card">
        <h3>Como se realiza el servicio</h3>
          <div class="card-body">
          <p>-Se analiza la institucion/empresa a fondo para obtener los datos pedidos</p>
          <p class="pcol">-Se hace una depuracion de datos para obtener los mas interesantes para sus fines</p>
          <p>-Se puede hacer una interrogacion a algun empleado que usted solicite</p>
          <p class="pcol">-Entre otras que se le informara personalmente</p>
          </div>
        </div>
      </div>
      <br>
      <div class="col-sm-5">
        <div class="card">
        <h3>Datos que se le entregaran</h3>
          <div class="card-body">
          <p>-La informacion relevante que usted no pida precisamente</p>
          <p class="pcol">-Datos y grafias de los bienes de la empresa por parte nuestra</p>
          <p>-Datos sobre alguna fuente externa o algun tipo de fraude</p>
          <p class="pcol">-Datos recopilados a lo largo de la investigacion(InvestigadoresPrivadosMX no se responsabilisa de la info. encontrada)</p>
          </div>
        </div>
      </div>
    </div>
    <br>

    <div>
      <h5 class="card-title">Contratar Ahora!!!</h5><br>
      <a href="pagar.php" class="button is-link">Contratar</a>
    </div>
      
    <br>
    <br>
    <br>
    <div class="pie">
      <h6 class="pie">Web App from <i><a href='http://localhost/invprimon'
      target='_blank'>Web Development</a></i></h6>
      <h6 class="pie">Echo en mexico. CBTIS 253, Todos los derechos reservados ?-2020</h6>
      <h6 class="pie">Esta pagina puede ser reproducida con fines no lucrativos siempre y cuando no se mutile, se cite la fuente completa y su direccion electronica</h6>
    </div>
  </body>
</html>
_END;
?>