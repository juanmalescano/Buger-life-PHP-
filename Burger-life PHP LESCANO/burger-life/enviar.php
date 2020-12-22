<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
</head>
<body>

<?php

    $email= $_REQUEST['email'];
    $nombre= $_REQUEST['nombre'];
    $localidad= $_REQUEST['telefono'];
    $comentario= $_REQUEST['mensaje'];

    if ($email == "" or $nombre == "" or $localidad == "" or $comentario == ""){
        echo "Faltan datos";
        header("Location: index.php");
        sleep(5);
    }else{
   $cuerpoMensaje="<p>Nuevo Mensaje</p><hr><p>Nombre: ".$nombre."</p><p>Email: ".$email."</p><p>Telefono: ".$localidad."</p><p>Mensaje: ".$comentario."</p>";

   //Darle formato al mail si no queremos copia o demas se saca
   $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
   $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $cabeceras .= "To: <juanma_5_11@hotmail.com>". "\r\n". "From: $nombre <$email>"."\r\n";
   //  $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
   //  $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

   $asunto= 'Nuevo mensaje de pagina web';
   $destino = 'juanma_5_11@hotmail.com';

   //Enviar los datos pero lo hacemos con una variable porque la funcion mail devuelve true o false.
   $envio = mail($destino, $asunto, $cuerpoMensaje, $cabeceras);

   if ($envio == false){
        // envio aviso de que no se envio la consulta
        $cuerpoMensaje="<p>Hola ".$nombre." no se ah podido enviar su consulta, por favor intente mas tarde.</p><br><p>Gracias.</p><br><p>Mensaje automatico, no responder.</p>";
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= "To: <$email>". "\r\n". "From: <juanma_5_11@hotmail.com>"."\r\n";
        $envio = mail($email, "Pagina Burger-Life", $cuerpoMensaje, $cabeceras);

        echo "No se pudo realizar la consulta";
        header("Location: index.php");
        sleep(5);

   }else{
       // envio confirmacion del envio de la consulta
        $cuerpoMensaje="<p>Hola ".$nombre." su consulta fue enviada, le responderemos en la mayor brevedad posible.</p><br><p>Gracias.</p><br><br><p>Mensaje automatico, no responder.</p>";
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= "To: <$email>". "\r\n". "From: <juanma_5_11@hotmail.com>"."\r\n";
        $envio = mail($email, "Pagina Burger-Life", $cuerpoMensaje, $cabeceras);

    //Coneccion de DB
    include "conection.php";

    $sql="INSERT INTO datosform VALUES(0,'$nombre','$email','$localidad','$comentario')";
    //Consultar
    $consulta =  mysqli_query($conexion,$sql) or die("No se pudo realizar la consulta");

    //Verifacar si se inserto o no verificando si devolvio true o false la consulta
    if ($consulta === false ){
    echo "No se pudo realizar la consulta";
    header("Location: index.php");
    sleep(5);
    }
    echo "Consulta realizada";

    //Liberar la memoria
    //mysqli_free_result(la consulta que queremos liberar)

    //Cerrar coneccion
    mysqli_close($coneccion);

    //Redirecciono
    header("Location: index.php");
    die();
    }
    }
?> 

</body>
</html>