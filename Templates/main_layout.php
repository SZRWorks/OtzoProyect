<?php
include_once 'Templates/1-Apertura.inc.php'; 

// Script que me ayuda a que esto se paresca mas a flask ;D
include_once 'Scripts/php/ti.php';

include_once 'Scripts/php/ControlSesion.inc.php';

?>


<body>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right shadow" id="sidebar-wrapper">

      <!-- Cabecera del Sidebar -->
      <div class="sidebar-heading bg-info" style="align-content: center;">
          <!-- Icono del usuario. -->
          <img class="icon-shape-sr shadow" src="Imagenes/otzologin.png" width="200px" height="200px">

          <!-- Nombre del usuario -->
          <div align="center" class="text-primary" id="username-lb" style="
                  font-weight: bold; font-size: 30px;
                  text-shadow: 2px 0 0 #fff,
                  -2px 0 0 #fff,
                  0 2px 0 #fff,
                  0 -2px 0 #fff,
                  1px 1px #fff,
                  -1px -1px 0 #fff,
                  1px -1px 0 #fff,
                  -1px 1px 0 #fff;">
              <?php
                if (ControlSesion::sesionIniciada())
                {
                  echo($_SESSION['nombreUsuario']);
                }
                else{ echo("<a class='text-primary' href='styled_login.php'>Inicia sesion!!</a>"); }
              ?>

          </div>
      </div>

      <!-- Pequeño Separador -->
      <hr class="bg-info">

      <!-- Sidebar Buttons -->
      <div class="list-group list-group-flush">

        <!-- Boton Tienda -->
        <Button hr class="btn btn-warning" style="height: 55px; margin: 5px; margin-bottom: 20px;"
          onclick="location.href = 'styled_shop.php'">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
          </svg>
           Tienda
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
        </Button>

        <!-- Boton Login -->
        <Button class="btn btn-success" style="height: 55px; margin: 5px; margin-bottom: 20px;"
          onclick="location.href = 'styled_login.php'">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>
           Iniciar Sesion
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
        </Button>

        <!-- Boton Registro -->
        <Button class="btn btn-info" style="height: 55px; margin: 5px; margin-bottom: 20px;"
          onclick="location.href = 'styled_register.php'">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
           Registrarse
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
        </Button>

        <!-- Boton Cierre de sesion -->
        <Button class="btn btn-danger" style="height: 55px; margin: 5px; margin-bottom: 20px;"
          onclick="location.href = 'logout.php'">
          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
            <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg>
           Cerrar Sesion
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
          </svg>
        </Button>
      </div>
    </div>


    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom shadow">
        <button class="btn btn-secondary" id="menu-toggle">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Pestaña de creditos -->
        <span class="badge badge-warning align-bottom" style="margin-left: 10px; height: 30px;">
          <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z" />
            <path fill-rule="evenodd"
              d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z" />
            <path
              d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
          </svg>
          Credits: $$
        </span>

        <!-- Boton para desplazar Sidebar -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-primary" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <!-- Home button -->
            <li class="nav-item active text-primary">
              <a class="btn btn-secondary nav-link" onclick="location.href = 'index.php'"
                style="margin-left: 5px; margin-top: 2px;">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill text-primary" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  <path fill-rule="evenodd"
                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg> <label class="text-primary"> Home </label>
              </a>
            </li>

            <!-- Shop button -->
            <li class="nav-item active">
              <a class="btn btn-secondary nav-link" onclick="location.href = 'styled_shop.php'"
                style="margin-left: 5px; margin-top: 2px;">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-shop text-primary" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 
                  3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg> <label class="text-primary"> Carrito </label>
              </a>
            </li>

            <!-- More button -->
            <li class="nav-item dropdown active">
              <a class="btn btn-info nav-link text-primary" id="navbarDropdown" data-toggle="dropdown"
                style="margin-left: 5px; margin-top: 2px;">
                <label class="text-primary"> More </label>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill text-primary" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <!-- Opciones de el boton More -->
                <a class="dropdown-item text-primary" href="/OtzoProyect/styled_register.php">Sing Up</a>
                <a class="dropdown-item text-success" href="/OtzoProyect/styled_login.php">Login</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Cuerpo de la pagina -->
      <div class="container-fluid">

        <!-- Body Layout -->
        <div class="container pt-4">
          <?php startblock("Body") ?>
          <?php endblock() ?>
          <br>
        </div>
      </div>
    </div>
  </div>

  <!-- Mis JScripts -->
  <script src="Scripts/js/main.js"></script>

  <!-- Bootstrap JScripts -->
  <script src="Scripts/js/jquery-3.5.1.min.js"></script>
  <script src="Scripts/js/popper.min.js"></script>
  <script src="Scripts/js/bootstrap.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
