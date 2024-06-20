<?php
$url = "localhost";
$usuario = "root";
$senha = "";
$dbname = "prova_j_y";

$conn = mysqli_connect($url, $usuario, $senha, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
