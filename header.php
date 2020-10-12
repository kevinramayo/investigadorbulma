<?php
   session_start();
echo <<<_INIT
   <!DOCTYPE html> 
   <html>
     <head>
       <meta charset='utf-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1'>                 
       <script src='node_modules/jquery/dist/jquery.min.js'></script>
       <script src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
       <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">        
       <link rel='stylesheet' href='styles.css' type='text/css'>    
       <script src='javascript.js'></script>
_INIT;
   
   require_once 'functions.php';
   $userstr = 'Bienvenido Usuario';
   if (isset($_SESSION['user'])) {
      $user     = $_SESSION['user'];
      $loggedin =  TRUE;
      $userstr  = "Secion de: $user";
   }
   else $loggedin = FALSE;

echo <<<_MAIN
      <title>Investigador Privado</title>
   </head>
   <body>
      <div>
         <div>
            <div id= 'logo' class='center'>Investigador Privado
            <img src="img/lupa.png" class="imglogo"></div>

            <div class="level">
            <div class="level-item has-text-centered">
              <div class="card">
              <img src="img/feis.png" class="contactos" alt="...">
                <div class="card-body">
                  <h6 class="titulos">Investigadores Privados MX</h6>
                  <p class="titulos">Pagina de Facebook</p>
                </div>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div class="card">
              <img src="img/insta.png" class="contactos" alt="...">
                <div class="card-body">
                  <h6 class="titulos">InvestigadoresMXK</h6>
                  <p class="titulos">Siguenos en instagram</p>
                </div>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div class="card">
              <img src="img/twiter.jpg" class="contactos" alt="...">
                <div class="card-body">
                  <h6 class="titulos">InvestigadoresMXOficial</h6>
                  <p class="titulos">Siguenos en Twitter</p>
                </div>
              </div>
            </div>
          </div>
          <div class='username'>$userstr</div> 
         </div>
      <div>
_MAIN;
   if ($loggedin){
echo <<<_LOGGEDIN

         <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="home.php">
    <p>Investigadores privados</p>
      <img src="img/lupa.png" width="40" height="40">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href='home.php'><button class="button is-primary is-light">
        Home
        </button></a>

      <a class="navbar-item" href='direccion.php'><button class="button is-primary is-light">
        Actualizar direccion
        </button></a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Servicios
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href='infidelidad.php'>
            Infidelidades
          </a>
          <a class="navbar-item" href='empresa.php'>
            Empresariales
          </a>
          <a class="navbar-item" href='tel.php'>
            Telefonicas
          </a>
          <a class="navbar-item" href='localizaciones.php'>
            Localizaciones
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-danger is-light" href='logout.php'>
            Log out
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

_LOGGEDIN;
   }
      else {
echo <<<_GUEST
         <div class='center'>
            <a class="button is-warning is-light" href='https://kevinramayo.github.io/'>Regresar al CV</a>
            <a class="button is-warning is-light" href='index.php'>Home</a>
            <a class="button is-warning is-light" href='signup.php#registro'>Registrarse</a>
            <a class="button is-warning is-light" href='login.php#ini'>Iniciar seción</a>     
         </div>
         <br>


         <div class="card">
           <div id="centro">
             <img src="img/invepng.png" class="tamaño" alt="...">
           </div>
           <div id= "centro">
             <img src="img/carrusel-2.png" class="tamaño" alt="...">
           </div>
           <div id= "centro">
             <img src="img/carrusel-3.png" class="tamaño" alt="...">
           </div>
           <div id="centro">
             <a href='signup.php'><img src="img/carrusel-4.png" class="tamaño" alt="..."></a>
           </div>
         </div>

         <strong><p class='info'>(Registrese con sus datos o puede registrarse como "Invitado")</p></strong>
_GUEST;
}
?>