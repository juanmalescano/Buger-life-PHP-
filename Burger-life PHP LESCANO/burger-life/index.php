<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Life</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- fuente titulo -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- AOS Scroll  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS  -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
       <!-- HEADER -->
       <header class="container-fluid position-fixed ">
      
      <!-- contenedor de menu y logo -->
      <div id="contenedorlog-nav" class="container p-0">

        <nav id="navegacion" class="navbar navbar-expand-lg navbar-light  p-0">

            <!-- Logo -->
            <div class=" align-self-center w-10 pb-4">
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
                <a class="nav-link" href="#sec_1">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#sec_2">Productos<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#sec_3">Nosotros<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#sec_4">Contactanos<span class="sr-only">(current)</span></a>
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
                     <a class="nav-link" href="ingresar.php">Logout</a>
                  </li>';
                }
                ?>
            </ul>
          </div>
        </nav>
      </div>

  </header>

    <!-- SECCION 1 -->
    <section id="sec_1" class="container-fluid row p-0 m-0 mb-sm-3">
      

        <div id="img1_sec1" class="col-lg-8 col-sm-12" data-aos="fade-right" data-aos-duration="1500">
            <div id="consec_1" class="text-center  row" data-aos="zoom-in" data-aos-duration="1500" >
              <h2 class="col-12 shadowtexto">Burger</h2>
              <h2 class="col-12 shadowtexto">Life</h2>
            </div>
        </div>
  

      <div id="contenedor_img1-2_sec1" class="col-lg-4 col-sm-0 row p-0 m-0" >

        <div id="img2_sec1" class="col-12" data-aos="fade-left" data-aos-duration="1500">

        </div>
        <div id="img3_sec1" class="col-12"  data-aos="zoom-in" data-aos-duration="1500">

        </div>

      </div>

    

    </section>
    

    <section id="sec_2" class="container-fluid py-5">

      <div class="container-fluid p-3 ">

        <div id="contenedor_cards" class="row justify-content-around">

          <div id="card1" class="card col-lg-5 col-sm-5 m-1 mb-sm-3 text-center mb-3" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="img/prod1.jpg" class="card-img-top mt-1" alt="Classic burger">
            <div class="card-body">
              <h5 class="card-title">Classic Burger</h5>
              <p class="card-text">
                Pan casero<br>
                Hamburguesa 150gr<br>
                Jamon y queso<br>
                Lechuga y tomate<br>
              </p>
              <p  id="aderezos">
                Sumale aderezos a eleccion!!
              </p>
              
            </div>
          </div>

          <div id="card2" class="card col-lg-5 col-sm-5 m-1 mb-sm-3 text-center mb-3" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="img/prod2.jpg" class="card-img-top mt-1" alt="Albahaca burger">
            <div class="card-body">
              <h5 class="card-title">Albahaca Burger</h5>
              <p class="card-text">
                Pan casero<br>
                Hamburguesa 150gr<br>
                Queso y albahaca<br>
                Lechuga y cebolla
              </p>
              <p  id="aderezos">
                Sumale aderezos a eleccion!!
              </p>
            </div>
          </div>

          <div id="card3" class="card col-lg-5 col-sm-5 m-1 text-center mb-3" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="img/prod3.jpg" class="card-img-top mt-1" alt="Vegan burger">
            <div class="card-body">
              <h5 class="card-title">Vegan Burger</h5>
              <p class="card-text">
                Pan casero<br>
                Hamburguesa de seitan<br>
                Pepino, rucula y cebolla
                Salsa vegan (opcional)
              </p>
              <p  id="aderezos">
                Sumale mayonesa vegana!!
              </p>
                
            </div>
          </div>

          <div id="card4" class="card col-lg-5 col-sm-5 m-1 text-center mb-3" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="img/prod4.jpg" class="card-img-top mt-1" alt="Bacon burger">
            <div class="card-body">
              <h5 class="card-title">Bacon Burger</h5>
              <p class="card-text">
                Pan casero <br>
                Hamburguesa 150grb<br>
                Bacon <br>
                Queso, tomate y cebolla
              </p>
              <p  id="aderezos">
                Sumale aderezos a eleccion!!
              </p>
                
            </div>
          </div>

          <div class="container text-center mt-5">
            <p>
             Todas las hamburguesas incluyen una porcion de papas fritas
            </p>
          </div>

        </div> 

      </div>

    </section>
    <!-- termina section 2 -->

    <!-- comienza el sec_3-->
    <section id="sec_3" class="container-fluid ">
        
      <div class="row ">

        <article id="info" class="col-xl-4 col-sm-12 mt-5 text-center mb-3">
          <h2 class="mb-5 ">Nosotros</h2>
          <p>
            Somos la tercera generacion de hamburgueseria familiar, fundada en 1947. 
          </p>
          <p>
            Con recetas familiares de mas de 70 años, apostamos cada día a innovar, sin perder esas tradiciones que tanto nos han marcado. 
            </p>
            <p>
          Tenemos la increíble oportunidad de enriquecer junto a nuestros clientes, las relaciones humanas. Y también ver a nuestro equipo, que da lo mejor de ellos, para entregarles todos los días, un producto que cumpla con los mejores estándares gastronómicos.  
          </p>
          
            <p>
          Esperemos que disfruten de nuestros productos tanto como nosotros al prepararlos
          </p>
        </article>

        <div id="img-nosotros" class="col-xl-8 col-sm-12 pr-0 p-0">           
          <div id="carousel-nosotros" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active w-100">
                  <img src="img/img_nosotros1.jpg" class="d-block w-100 img-fluid" alt="Imagen 1">
              </div>
              <div class="carousel-item w-100" >
                <img src="img/img_nosotros2.jpg" class="d-block w-100" style="width: 100%;" alt="Imagen 2">
              </div>
            </div>
          </div>
        </div>

    </div>
 
  </section> 
  <!-- termina section _3-->

    <section id="sec_4" class="container-fluid m-0 py-5"> 

      <div class="container">

        <div class="row justify-content-betweem">

          <div id="contacto" class=" col-sm-12 col-md-7 mt-3 mb-5 text-center pt-5">
            
              <p>
                Av. Fernandez Beschtedt 1440 
                Lujan, Buenos aires 
              </p>
                <p>
                Horarios:</p>
                <p>
                Lunes a Viernes 
                09:00 a 15:00
              </p>
              <p>
              Sabados 
                09:00 a 12:00
              </p>
            <div id="mapa" class="mapa overflow-hidden">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d821.432861271442!2d-59.107877174823884!3d-34.56035441890713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc7d87a664c641%3A0x55098796c55322ae!2sLuj%C3%A1n%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1603224684468!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          
        
          </div>

          <div class="col-sm-12 col-md-5 m-sm-0 pt-5 mb-3 ">
            <form method="POST" id="form-contacto" class="row justify-content-betweem" action="enviar.php">

              <div class="col-12 mb-4">
                <h2 class="text-center">Contacto</h2>
              </div>

              <div class="col-6">
                      <input type="text" required class="form-control" name="nombre" placeholder="Nombre" maxlength="20">
              </div>

              <div class="col-6">
                      <input type="text" required class="form-control" name="apellido" placeholder="Apellido" maxlength="20">
              </div>

              <div class="col-10">               
                      <input type="text" class="form-control mt-3 mb-3" required name="email" id="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" placeholder="Email" >         
              </div>	

              <div class="col-6">
                      <input type="text" class="form-control mb-3" required name="telefono" placeholder="Telefono" >
              </div>  

              <div class="col-12 mb-5">
                  <label>
                      <textarea name="mensaje" id="descripcion" class="form-control" rows="4" cols="100" placeholder="..."></textarea>
                  </label>
              </div>

              <div class="col-6 col-md-5 mb-3 m-auto">
                  <input type="submit" class="form-control" id="enviar" value="Enviar">
            </div>

          </form>	
        </div>

      </div>

    </div>
    </section>

    <footer id="footer" class="container-fluid text-center p-0 mb-0">

      <div id="redes" class="container p-0 my-0">
        <ul class="row justify-content-center m-0">
          <li class="col-1 m-1"><a href="https://www.facebook.com/juanma.lescano/"><img src="img/icons/fb.png" alt="Fb"></a>
          </li>

          <li class="col-1 m-1"><a href="www.instagram.com/juanmalescano/"><img src="img/icons/ins.png" alt="Telegram"></a>
          </li>

          <li class="col-1 m-1"><a href="#"><img src="img/icons/wpp.png" alt="Wpp"></a></li>

          <li class="col-1 m-1"><a href="#"><img src="img/icons/tele.png" alt="Wpp"></a></li>
        </ul>      
     </div>

        <div class="derechos ">
          <p class="text-center m-0">
            &copy; Derechos reservados - 2020
          </p>
        </div>
    </footer>








    <!-- js de bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- AOS scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

  </body>
</html>
