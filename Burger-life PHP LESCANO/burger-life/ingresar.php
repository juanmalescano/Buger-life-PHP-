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
  <main id="main_ingresar" class=" container-fluid row p-0 m-0">
     
   <?php
   include "header.php";
   ?>

        <section class="container m-0 row justify-content-center col-sm-12 col-lg-8"  id="sec_ingresar">

                <div id="contenedor_ingreso" data-aos="fade-down"  data-aos-duration="2000" class="col-sm-12 col-md-8 col-lg-6 col-xl-4  m-sm-0 pt-5 mb-3 row ">
                      
                        <!-- valido que no este la sesion abierta -->
                        <?php
                        //  session_start();

                       if (isset($_SESSION['contrasenia']) == false || isset($_SESSION['usuario']) == false){
                                echo '
                                <div class="col-sm-12 mt-5">
                                        <p class="mt-5 text-center">
                                        Ingresa y conoce el estado de tus pedidos! 👌
                                        </p>
                                </div>

                                <div class="col-sm-12">
                                        <form method="POST" id="form-registro" class="row justify-content-center" action="validaringreso.php">';

                                echo '             <div class="col-12 mb-4">
                                                        <h2 class="text-center">Login</h2>';
                                                          // abro sesion
                                                           //session_start();

                                                        if (isset($_SESSION['Estado'])){
                                                                if ($_SESSION['Estado'] !== ""){
                                                                        echo '<p class="text-danger text-center">'.$_SESSION["Estado"].'</p></div>';
                                                                }
                                                        }
                                                        // destruyo la sesion
                                                        session_destroy();
                                                       
                        
                                                 
                                
                                echo '          <div class=" col-12 row justify-content-center m-0">

                                                        <div class="col-md-10 col-sm-12 mt-3">
                                                                <input type="text" class="form-control " required name="usuario" placeholder="Usuario" >
                                                        </div>  
                                                
                                                        <div class="col-md-10 col-sm-12 mt-3">
                                                                <input type="password" class="form-control " required name="password" placeholder="Password" >
                                                        </div>  
                                                </div>

                                                <div class=" col-md-12 my-3 mx-0 justify-content-center row justify-content-center">
                                                        <input type="submit" class="form-control text-center col-6" id="Ingresar" value="Ingresar">                                        
                                                </div>
                                                <div class="col-12 text-center">
                                                        <a href="registro.php">Registrarse</a> 
                                                </div>
                                        
                                        </form>	
                                </div>

                                ';
                        }else{
                                // si esta abierta la sesion muestro Logout 
                                echo '
                                              
                                <div class="col-sm-12 mt-5">
                                        <p class="mt-5 text-center">
                                                Vuelve pronto tendremos mas novedades para ti!
                                        </p>
                                </div>

                                <div class="col-sm-12">
                                        <form method="POST" id="form-registro" class="row justify-content-center" action="cerrarsesion.php">

                                        <div class="col-12 mb-4">
                                                <h2 class="text-center">Logout</h2>
                                        </div>         

                                        <div class="col-6 col-md-5 mb-3 mt-5 justify-content-center">
                                                <input type="submit" class="form-control" id="cerrar" value="Cerrar Sesion">                                        
                                        </div>
                                
                                </form>
                	        </div> 
                                ';
                        }
                        
                        ?>
                        

                        
                        
        </section>
                
        <section id="sec_ingreso_img" data-aos="fade-up" data-aos-duration="1500" class="col-lg-4 col-sm-0  p-0 m-0">
                
        </section>           

 
</main>                       
   <?php

        include "footer.php";

   ?>

</body>
</html>