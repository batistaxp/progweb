<?php
date_default_timezone_set('America/São_Paulo');
$nome                =$_POST{"nome"}
$uasuario            =$_POST{"usuario"}
$senha               =$_POST{"senha"}
$cargo               =$_POST{"cargo"}
$administrador       =$_POST{"administrador"}

echo "Nome:".$nome."<br>";
echo "Usuario:".$usuario."<br>";
echo "Senha:".$senha."<br>";
echo "Cargo:".$cargo."<br>";
echo "Admin:".$administrador."<br>";
echo "Hora:".date("H");
?>
