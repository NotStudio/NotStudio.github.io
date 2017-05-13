<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo= $_POST['correoenvia'];
$telefono = $_POST['telefono'];
$sexo=$_POST['GrupoOpciones1'];
$mensaje=$_POST['mensaje'];
$radio= $_POST['GrupoOpciones2'];
$opinion=$_POST['opinion'];
$header = 'From: ' . $correo . " rn";
$header .= "X-Mailer: PHP/" . phpversion() . " rn";
$header .= "Mime-Version: 1.0 rn";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por : " . $nombre . " rn";
$mensaje .= "Su e-mail es : " . $correo. " rn";
$mensaje .= "Sexo : " . $_POST['GrupoOpciones1'] . " rn";
$mensaje .= "Mensaje : " . $_POST['mensaje'] . " rn";
$mensaje .= "Que opinas de nuestra pagina :" . $_POST['GrupoOpciones2'] . " rn";
$mensaje .="Danos tu opinion :".$_POST['opinion'] . " rn";
$mensaje .= "Enviado el ; " . date('d/m/Y', time());

$para = 'elcorreodondereciben@tudominio.com';
$asunto = 'Formulario enviado pagina web';

mail($para, $asunto, utf8_decode($mensaje), $header, $telefono);

echo 'mensaje enviado correctamente';

?>
