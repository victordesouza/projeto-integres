<?php
header("Content-Type: text/html; charset=utf-8");
if(!isset($_SESSION)){
    session_start();
}
$conexao = mysqli_connect('localhost', 'root', 'root', 'integres_testeis');
$sql= "SET NAMES 'utf8'";
mysqli_query($conexao, $sql);
$sql = "SET character_set_connection=utf8";
mysqli_query($conexao, $sql);
$sql ="SET character_set_client=utf8";
mysqli_query($conexao, $sql);
$sql ="SET character_set_results=utf8";
mysqli_query($conexao, $sql);
?>
