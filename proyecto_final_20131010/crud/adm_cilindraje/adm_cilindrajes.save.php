<?php
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

echo "Nombre: $nombre<br>Ciudad:$ciudad<br>Email:$email<br>
Telefono:$telefono<br>Mensaje:$mensaje";

$denombre="Contactenos";  //Nombre del que envia
$email="dariorojas2007@hotmail.com"; //Email del que envia
$sfrom="$email";  //Email del que envia
$sBCC="dariororojas2007@hotmail.com"; //email de copia oculta
$sdestinatario="dariorojas2007@hotmail.com";//email destinatario
$ssubject="Mensaje de Contactenos"; //Titulo del mensaje
$smensaje="Mensaje Enviado por: $nombre\n
			Email:$email\n
			Ciudad:$ciudad\n
			Telefono:$telefono\n
			Mensaje:$mensaje";
$encabezado="MIME-Version:1.0\n";
$encabezado.="Content-type:ext/html;charset=UTF-8\n";
$encabezado.="From:$denombre<$deemail>\n";
$encabezado.="x-Sender:<$sfrom>\n";
$encabezado.="BCC:<$sBCC>\n";
$encabezado.="X-Mailer:PHP\n";
$encabezado.="X-Priority: 1\n";
$encabezado.="Return-Path:<$sfrom>";

mail($sdestinatario, $ssubject, $smensaje, $encabezado);
echo "Mensaje Enviado Satisfactoriamente a Contactenos";
echo "<a href='index.html'>Volver Atras</a>";





?> 