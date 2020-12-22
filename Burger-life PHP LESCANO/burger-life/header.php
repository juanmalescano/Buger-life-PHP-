    <!-- HEADER -->
    <header class="container-fluid position-fixed ">
      
        <!-- contenedor de menu y logo -->
        <div id="contenedorlog-nav" class="container p-0">

          <nav id="navegacion" class="navbar navbar-expand-lg navbar-light  p-0">

                <!-- Logo -->
                <div class="align-self-center w-10 pb-4">
                  <a href="index.php"><h1 class="text-hide">Burger life</h1>
                  <img id="logoimg" src="img/logo.png" alt="Logo" style="width: 40%;"></a>
                </div>

                  <!-- menu navegacion -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#contenedorlistamenu" aria-controls="contenedorlistamenu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
          
                <div class="collapse navbar-collapse" id="contenedorlistamenu">
                 
                  <ul class="navbar-nav ml-auto text-right">
                    
                      <li class="nav-item ">
                        <a class="nav-link" href="index.php#sec_1">Home<span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item ">
                        <a class="nav-link" href="index.php#sec_2">Productos<span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item ">
                        <a class="nav-link" href="index.php#sec_3">Nosotros<span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item ">
                        <a class="nav-link" href="index.php#sec_4">Contactanos<span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="pedidos.php">Pedidos</a>
                      </li>

                      <?php
                      // valido si hay abierta una session
                      session_start();

                      if (isset($_SESSION['contrasenia']) == false || isset($_SESSION['usuario']) == false){
                        echo '
                        <li class="nav-item">
                          <a class="nav-link" href="ingresar.php">LogIN</a>
                        </li>';
                      }else{
                        echo '
                        <li class="nav-item">
                          <a class="nav-link" href="ingresar.php">LogOut</a>
                        </li>';
                      }
                      ?>
                  </ul>

                </div>

          </nav>

        </div>

    </header>