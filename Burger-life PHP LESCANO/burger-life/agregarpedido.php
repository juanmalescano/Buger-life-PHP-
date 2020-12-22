<?php

include "conection.php";

session_start();

// traigo el ID del usuario
$ls_sql = "SELECT id FROM registros WHERE usuario = '".$_SESSION['usuario']."' AND Contrasenia= '".$_SESSION['contrasenia']."' ";
$consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL recuperando ID");

if( mysqli_num_rows($consulta) > 0){
    $datos = mysqli_fetch_assoc($consulta);
}

// armo array de productos
$producto = Array('Bacon Burger','Vegan Burger','Classic Burger','Albahaca Burger');

// armo array de Estados
$estado = Array('Proceso','Despachado','Pendiente');
$articulo = $producto[array_rand($producto,1)];

switch ($articulo) {
    case 'Bacon Burger':
        $precio = 380;
        break;

    case 'Vegan Burger':
        $precio = 370;
        break;

    case 'Classic Burger':
        $precio = 350;
        break; 

    case 'Albahaca Burger':
        $precio = 360;
        break;      
    default:
        $precio = 350;
        break;
}

// inserto 2 pedidos (para mostrar en pedidos despues)
$ls_sql = "INSERT INTO Pedidos VALUES(0,'$articulo',$precio,'".$estado[array_rand($estado,1)]."',CURDATE(),'".$datos['id']."')";
$consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL") ;

// cierro conexion
mysqli_close($conexion);

header("Location: pedidos.php");

?>