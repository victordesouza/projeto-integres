<!DOCTYPE html>
<html>
<head lang="en">
	<title>Login</title>
 	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background-color: #fafafa">

<?php
if(array_key_exists("error",$_GET) && $_GET["error"]=="true"){
?>
<p class="alert-danger">Usuário ou Senha Incorreto</p><br>
<?php
}
?>
<div style="margin-left: 30%;margin-right: 30%">
	<form style="text-align: center;padding: 30px;background-color: #e5e5e5;margin-top: 7%;border-radius: 12px; border: 2px solid #777" method="post" action="verificaLogin.php">
	
		<img align="center" src="logo.png" width="30%">
		<br><br>
		<div class="input-group">
      		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      		<input id="nome" type="text" class="form-control" name="nome" placeholder="Usuário">
    	</div>
    	<div class="input-group">
      		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      		<input id="password" type="password" class="form-control" name="password" placeholder="Password">
    	</div>
    	<br>
    	<a href="cadastro-empresa.php" style="float: left;margin-top: 10px">Criar Novo Registro</a>
		<input style="margin-left: 40%" class="btn btn-default btn-lg" type="submit" name="submit" value="Entrar">
	
	</form>
</div>
<div style="position: absolute;bottom: 0;margin-left: 70%">
<span style="color: #111"><strong>*  Navegadores Suportados:</strong><img src="navegadores-suportados.jpg" width="30%"></span>

</div>
</body>
</html>