<?php
require_once("FuncoesBanco.php");
$cont= 0;
$nome = $_POST['nome'];

$password = $_POST['password'];
$SenhaArray = array();

$nome = SqlInjector($nome);  ######   EVITA O SQL INJECTOR NOS INPUTS
$passMd5 = md5($password);

if ($nome == NULL || $password == NULL){
	$_SESSION['danger_login'] = "Nome e senha são obrigatórios";
	header('Location: login.php');
}else{
$sql = "select p.SENHA,p.USER,q.TIPO from login p
				left outer join cad_empresa q on (q.cod = p.COD_EMPRESA)
				where upper(p.USER) = upper('$nome') and p.SENHA = '$passMd5'";
$qySenha = Conecta($sql);

$login = mysqli_fetch_assoc($qySenha);

if ($login == NULL) {
	$_SESSION['danger_login'] = "Nome ou senha incorreto(s)";
	header('Location: login.php');
}else{
	if ($login["TIPO"] == 1) {
		header('Location: industriaInicial.php',TRUE,307);
		$_SESSION['tipo'] = 1;
	}else {
		header('Location: comercioInicial.php',TRUE,307);
		$_SESSION['tipo'] = 2;
	}
}
}

include("rodape.php");
?>
