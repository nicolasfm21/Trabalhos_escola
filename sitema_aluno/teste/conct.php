<?php

$hostname = "localhost";
$bancodedados = "aprendercont";
$usuario = "root";
$senha = "usbw";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// else echo("conect");
