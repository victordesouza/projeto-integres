<?php
include("ConectaBanco.php");
$cont= 0;
$nome = $_POST['nome'];

$password = $_POST['password'];
$SenhaArray = array();

$nome = mysqli_real_escape_string($conexao, $nome);
$passMd5 = md5($password);

if ($nome == NULL || $password == NULL){
	header('Location: login.php?error=true');
}

$qySenha = mysqli_query($conexao,"select p.SENHA,p.USER,q.TIPO from login p
				left outer join cad_empresa q on (q.cod = p.COD_EMPRESA)
				where upper(p.USER) = upper('$nome') and p.SENHA = '$passMd5'");

$login = mysqli_fetch_assoc($qySenha);

if ($login == NULL) {
	header('Location: login.php?error=true');
}else{
	if ($login["TIPO"] == 1) {
		header('Location: industriaInicial.php',TRUE,307);
		$_SESSION['tipo'] = 1;
	}else {
		header('Location: comercioInicial.php',TRUE,307);
		$_SESSION['tipo'] = 2;
	}
}

include("rodape.php");
?>
