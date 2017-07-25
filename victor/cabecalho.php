<?php require_once("FuncoesBanco.php");
logado();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
	  google.load("jquery", "1.4.2");
	</script>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/cabecalho.css">
</head>
<body>
<ul>
<li><img style="width:67px" src="logo.png"></li>
  <?php
  if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 1) {?>
  	<li><a href="industriaInicial.php">Home</a></li>
  	<li><a href="cadastroProduto.php">Cadastrar Produto</a></li>
  <?php } if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 2) {?>
	<li><a href="comercioInicial.php">Home</a></li>
  	<li><a href="fornecedores.php">Fornecedores</a></li>
  <?php }?>
  <li><a href="">Contato</a></li>
  <form action="index.php" method="post">
  	<li style="float: right;"><button type="submit" class="logout">Logout</button></li>
	</form>
</ul>
