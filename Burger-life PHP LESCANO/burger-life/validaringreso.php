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
    <?php
    $usuario = $_REQUEST['usuario'];
    $password = $_REQUEST['password'];

    if ($usuario == "" or $password == ""){
            // abro sesion
            session_start();
             
            // y paso que existe el usuario
            $_SESSION['Estado'] = "Debe completar los campos";
            header("Location: registro.php");   
    }else{

    //conexion MySQL
    include "conection.php";

    //Consulta SELECT
    $ls_sql="SELECT nombre,usuario,contrasenia FROM Registros WHERE usuario = '$usuario' AND contrasenia = '$password'";

    $consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL");

    //Evaluar la cantidad de resultados
    if( mysqli_num_rows($consulta) == 0){
        // cierro conexion
        mysqli_close($coneccion);

          // abro sesion
          session_start();
             
          // y paso que existe el usuario
          $_SESSION['Estado'] = "Usuario o Contraseña erronea.";
          header("Location: ingresar.php");   
    }else{

    //Si existe proceso los datos
    $datos = mysqli_fetch_assoc($consulta);    
    
    //Abro session
    session_start();
	//se crea la sesion, con lo enviado por post
	$_SESSION['contrasenia'] = $datos['contrasenia'];
    $_SESSION['usuario'] = $datos['usuario'];

    // cierro conexion
    mysqli_close($coneccion);

    //y me voy a pedidos
    header("Location: pedidos.php");
    }
    }


    ?>
</body>
</html>