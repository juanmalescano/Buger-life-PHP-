<?php
//abro session
session_start();

//cierro la session
session_destroy();

//redirecciono
header("Location: index.php");

?>