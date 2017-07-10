<?php require_once("FuncoesBanco.php");?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/cabecalho.css">
</head>
<body>
<ul>
<li><img style="width: 60px;padding-left: 10px;padding-right: 30px" src="logo.png"></li>
  <?php
  if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 1) {?>
  	<li><a href="industriaInicial.php">Home</a></li>
  	<li><a href="addProduto.php">Add Produto</a></li>
  <?php } if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 2) {?>
	<li><a href="comercioInicial.php">Home</a></li>
  	<li><a href="fornecedores.php">Fornecedores</a></li>
  <?php }?>
  <li><a href="">Contato</a></li>
  <form action="login.php" method="post">
  <li style="float: right;"><button type="submit" class="logout">Logout</button></li></form>
</ul>
