<?php

//Conexion localhost
 $ls_servidor="localhost";
 $ls_userDB="root";
 $ls_contraConec="";
 $ls_nombreDB="webmasterutn";
 
 @$conexion = mysqli_connect($ls_servidor, $ls_userDB , $ls_contraConec, $ls_nombreDB) or die("agarra si hubo un error en la coneccion aca va el mensaje que mostrara".mysqli_error());

 
//Conexion host
// $servidor="localhost";
// $userDB="root";
// $contraConec="";
// $nombreDB="webmasterutn";

// @$conexion = mysqli_connect($servidor, $userDB , $contraConec, $nombreDB) or die("agarra si hubo un error en la coneccion aca va el mensaje que mostrara".mysqli_error());

?>