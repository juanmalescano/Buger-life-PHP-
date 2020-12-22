<?php
	$validar = true;

	foreach ($_REQUEST as $datos){
		if ($datos == ""){
			echo "<p>Faltan datos para poder realizar el registro</p>";
			header("Location: registro.php");
            sleep(5);
			$validar = false;
		}
	}

    if ($validar == true){
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $email = $_REQUEST['email'];
        $telefono = $_REQUEST['telefono'];
        $usuario = $_REQUEST['usuario'];
        $password = $_REQUEST['password'];

        //meto la conexion
        include "conection.php";

        // Consulto a la DB si existe el usuario
        $ls_sql= "SELECT * FROM Registros WHERE usuario = '$usuario'";
        $consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL Validando Usuario");

        // si trae registro el usuario existe y me voy a registro
        if( mysqli_num_rows($consulta) !== 0){
            // cierro conexion
            mysqli_close($coneccion);

            // abro sesion
            session_start();
             
            // y paso que existe el usuario
            $_SESSION['Estado'] = "El usuario ".$usuario." ya existe! ingrese uno distinto.";
            header("Location: registro.php");         
            exit;
        }

        //Armo el Insert de Registro
        $ls_sql = "INSERT INTO Registros VALUES(0,'$nombre','$apellido','$email','$telefono','$usuario','$password')";
        $consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL Insertando Registro");
        
        if($consulta == false){   
            // cierro conexion
            mysqli_close($conexion);   

           // abro sesion
           session_start();
             
           // y paso que existe el usuario
           $_SESSION['Estado'] = "No se pudo realizar el Registro. Intente de nuevo mas tarde.";
           header("Location: registro.php");         

        }else{
            // traigo el ID del nuevo usuario
            $ls_sql= "SELECT id FROM Registros WHERE usuario = '$usuario' AND contrasenia = '$password'";
            $consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL recuperando ID");

            if( mysqli_num_rows($consulta) > 0){
                $datos = mysqli_fetch_assoc($consulta);
            }

            // inserto 2 pedidos (para mostrar en pedidos despues)
            $ls_sql = "INSERT INTO Pedidos VALUES(0,'Bacon Burger',350,'Despachado',CURDATE(),'".$datos['id']."')";
            $consulta = mysqli_query($conexion,$ls_sql) or die("Error Query MySQL") ;
          
            // cierro conexion
            mysqli_close($conexion);

            header("Location: ingresar.php");
        }
    }
?>