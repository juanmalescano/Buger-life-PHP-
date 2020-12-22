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
    <!-- header -->
    <?php
    include "header.php";
    ?>

    <main id="main_pedidos" class="p-0 m-0">

    <section class="container-fluid m-0 row justify-content-center "  id="sec_pedidos">

        <div class="col-12">
            
        </div>

        <div id="contenedor_pedidos" data-aos="fade-down"  data-aos-duration="2000" class="col-sm-12 col-md-10 col-lg-8 col-xl-6  m-sm-0 pt-5 mb-3 row">
      
    
                 <div class="col-sm-12 mt-5 ">
                
                    <?php
                        include "conection.php";

                    //  session_start();        

                    // si no hay sesion abierta muestro esto 
                    if (isset($_SESSION['contrasenia']) == false || isset($_SESSION['usuario']) == false){
                        echo '<div>
                            <h3 class="text-center">
                                Debe iniciar Sesion para poder Visualizar sus pedidos! 
                            </h3>
                            <h3 class="text-center">Click aqui 👉<a href="ingresar.php">Login</a></h3>
                            <p class="text-center">Si todavia no sos parte de nosotros puedes hacerlo pinchando aqui 👇</p>
                            <p class="text-center"><a class="text-center" href="registro.php">Registrarte!</a></p>

                            </div>';
                    }
                    // si hay sesion abierta muestro esto
                    else{
                        // armo primera select
                        $ls_sql = "SELECT nombre, apellido FROM registros WHERE usuario = '".$_SESSION['usuario']."' AND Contrasenia= '".$_SESSION['contrasenia']."' ";

                        // ejecuto select
                        $consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL 1") ;
                        
                        // si es distinto de 0 (tiene los registros) procesos los datos (si tiene sesion deberia tener registros)
                        if( mysqli_num_rows($consulta) !== 0){
                            //Si existe proceso los datos
                            $datos = mysqli_fetch_assoc($consulta);   
                            $nombre = $datos['nombre'];
                            $apellido = $datos['apellido'];
                        }

                        // armo select de pedidos solo traigo los que no esten en estado finalizado
                         $ls_sql = "SELECT p.id, p.Articulo , p.Precio , p.Estado , p.Fecha 
                                    FROM registros r JOIN pedidos p ON r.id = p.id_cliente 
                                    WHERE r.usuario = '".$_SESSION['usuario']."' AND r.Contrasenia= '".$_SESSION['contrasenia']."'
                                    AND  p.Estado <> 'Finalizado' ";

                        $consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL 2") ;
                        
                        echo '<div class="row  justify-content-between">
                            
                            <h3 class="text-center col-12 mb-5">';
                            
                            // obtengo la cantidad de registro
                            $li_cant_registro = mysqli_num_rows($consulta);
                            // si no hay registro muestro esto
                            if( $li_cant_registro == 0){
                            echo'

                            Hola '.$nombre.' '.$apellido.' todavia no tiene pedidos 😔, realice su pedido por medio de 
                            Wpp: 0123456789 📱
                            </h3>';
                        }
                        // si hay registros muestro los pedidos
                        else{
                            echo '
                                Hola '.$nombre.' '.$apellido.' podes visualizar el estado de tus pedidos aqui 👇
                            </h3>';                        
                                                      
                            ?>
                            <div  class="col-3 text-center">
                                 <h4>Numero de pedido</h4> <br>                                            
                            </div>
                           
                            <div  class="col-2 text-center">
                                 <h4>Fecha</h4> <br>                        
                            </div>
                           
                            <div  class="col-2 text-center">
                                <h4>Estado</h4> <br>                               
                            </div>

                            <div  class="col-2 text-center">
                                 <h4>Producto</h4>  <br>                
                            </div>

                            <div  class="col-2 text-center">
                                <h4>Precio</h4>  <br>              
                            </div>
                             <?php
                             //proceso los datos y voy mostrando los pedidos
                            for ($i=0; $i < $li_cant_registro ; $i++) { 
                                $datos = mysqli_fetch_assoc($consulta); 
                                echo'<div class="col-3 text-center"> '.$datos['id'].'</div>';
                                echo'<div class="col-2 text-center"> '.$datos['Fecha'].'</div>';
                                echo'<div class="col-2 text-center"> '.$datos['Estado'].'</div>';
                                echo'<div class="col-2 text-center"> '.$datos['Articulo'].'</div>'; 
                                echo'<div class="col-2 text-center"> $'.$datos['Precio'].'</div>'; 
                            }
                           
                            
                        }
                                    
                       echo '</div>';
                        echo'
                     <div class="d-flex justify-content-center mt-5 pt-5">
                        <a class="btn btn-warning" href="agregarpedido.php"> Agregar Pedido </a>
                     </div>';
                    }
                    
                     ?>
                                    
                </div>

               
        </div>
        <div class="col-sm-12 mt-1">

        </div>
    </main>
    <?php

include "footer.php";

?>
    
</body>
</html>