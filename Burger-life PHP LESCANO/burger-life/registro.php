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
<main id="main_registro" class="container-fluid row my-0 mx-0 p-0">
        <!-- header -->
        <?php

        include "header.php";
        ?>
        <section class="container m-0 row justify-content-center col-sm-12 col-lg-8 row" id="sec_registro" id="sec_registro">

                <div id="div_contenedor_registro" data-aos="fade-down"  data-aos-duration="2000" class="col-sm-12 col-md-10 col-lg-6 col-xl-4 m-sm-0 pt-5 mb-3 row">
                        <div class="col-12 mt-5">
                        <p>
                        Registrate y obtene un 10% en tus primeras 5 compras!! 💪

                        </p>
                        </div>
                        <div class="col-sm-12">
                                <form method="POST" id="form-registro" class="row justify-content-center" action="insertarregistro.php">

                                        <div class="col-12 mb-4">
                                                <h2 class="text-center">Registrate!</h2>
                                                <p>
                                                <?php
                                                // abro sesion
                                                  session_start();

                                                if (isset($_SESSION['Estado'])){
                                                        if ($_SESSION['Estado'] !== ""){
                                                                echo "<p class='text-danger text-center'>".$_SESSION['Estado']."</p>";
                                                        }
                                                }
                                                // destruyo la sesion
                                                session_destroy();
                                                ?>
                                                </p>
                                        </div>
                                        <div class=" col-12 row">
                                                <div class="col-12 mt-3">
                                                        <input type="text" required class="form-control" name="nombre" placeholder="Nombre" maxlength="20">
                                                </div>

                                                <div class="col-8 mt-3">
                                                        <input type="text" required class="form-control" name="apellido" placeholder="Apellido" maxlength="20">
                                                </div>

                                                <div class="col-10 mt-3">               
                                                        <input type="text" class="form-control" required name="email" id="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" placeholder="Email" >         
                                                </div>	

                                                <div class="col-6 mt-3">
                                                        <input type="text" class="form-control " required name="telefono" placeholder="Telefono" >
                                                </div>  
                                                
                                                <div class="col-8 mt-3">
                                                        <input type="text" class="form-control " required name="usuario" placeholder="Usuario" >
                                                </div>  
                                        
                                                <div class="col-6 mt-3">
                                                        <input type="password" class="form-control " required name="password" placeholder="Password" >
                                                </div>  
                                        </div>

                                        <div class="col-6 col-md-5 mb-3 mt-5 justify-content-center">
                                          <input type="submit" class="form-control" id="enviar" value="Enviar">                       
                                        </div>

                                </form>	
                        </div>
                </div>

        </section>
        <section id="sec_registro_img" data-aos="fade-up" data-aos-duration="1500" class="col-lg-4 col-sm-0 ">
        
        </section>
</main>
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