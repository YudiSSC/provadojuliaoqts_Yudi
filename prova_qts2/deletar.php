<?php
session_start();
include("seguranca.php");

if ($_SESSION['usuarioPerfilID'] != 1) {
    $_SESSION['negacao'] = "Acesso negado!";
    header("location: index.php");
    exit();
}

require_once("conexao.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM usuarios WHERE id = ?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

header("location: dash.php");
exit();
?>
