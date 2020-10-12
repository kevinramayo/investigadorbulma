<?php
  require_once 'header.php';

echo <<<_END
        <br>
        <h1 class="subtitle is-3">Servicios a su disposición</h1>
        <br>
        <br>
        <div class="level">
        <a href="infidelidad.php"><div>
          <div class="cartas">
          <img src="img/infe.jpg" class="imgcarta" alt="...">
            <div>
              <h5 class="card-title">Infidelidades</h5>
            </div></a>
          </div>
        </div>
        <a href="empresa.php"><div>
          <div class="cartas">
          <img src="img/empresa.jpg" class="imgcarta" alt="...">
            <div>
              <h5 class="card-title">Empresariales</h5>
            </div></a>
          </div>
        </div>
        <a href="localizaciones.php"><div>
          <div class="cartas">
          <img src="img/buscar.jpg" class="imgcarta" alt="...">
            <div>
              <h5 class="card-title">Localizaciones</h5>
            </div></a>
          </div>
        </div>
        <a href="tel.php"><div>
          <div class="cartas">
          <img src="img/celular.jpg" class="imgcarta" alt="...">
            <div>
              <h5 class="card-title">Inv. Telefonicas</h5>
            </div></a>
          </div>
        </div>
      </div>
      
    <br>
    <br>
    <br>
    <div class="pie">
      <h6 class="pie">Web App from <i><a href='https://kevinramayo.github.io/'
      target='_blank'>Web Development</a></i></h6>
      <h6 class="pie">Echo en mexico. CBTIS 253, Todos los derechos reservados ?-2020</h6>
      <h6 class="pie">Esta pagina puede ser reproducida con fines no lucrativos siempre y cuando no se mutile, se cite la fuente completa y su direccion electronica</h6>
    </div>
  </body>
</html>
_END;
?>