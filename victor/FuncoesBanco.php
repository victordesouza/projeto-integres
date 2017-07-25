<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
//$conexao = mysqli_connect('host', 'user', 'senha', 'nome_banco');
function Banco(){
  //$conexao = mysqli_connect('localhost', 'integres_dbadmin', 'EB#ZTgx.UG', 'integres_bdgeral');
  $conexao = mysqli_connect('localhost', 'root', 'root', 'integres_testeis');
  $sql2= "SET NAMES 'utf8'";
  mysqli_query($conexao, $sql2);
  $sql2 = "SET character_set_connection=utf8";
  mysqli_query($conexao, $sql2);
  $sql2 ="SET character_set_client=utf8";
  mysqli_query($conexao, $sql2);
  $sql2 ="SET character_set_results=utf8";
  return $conexao;
}

function Conecta($sql){
  $conexao = Banco();
  $resultado = mysqli_query($conexao, $sql);
  return $resultado;
}

function SqlInjector($string){
  $conexao = Banco();
  return mysqli_real_escape_string($conexao, $string);
}

# Verifica se o usuário está logado, se não estiver redireciona para o index.php
function logado(){
  if (!isset($_SESSION['logado'])) {
    header("Location: index.php");
  }
}

?>
