<?php 
include("ConectaBanco.php");
$cont= 0;
$nome = $_POST['nome'];

$password = $_POST['password'];
$SenhaArray = array();

if ($nome == NULL || $password == NULL){
	header('Location: login.php?error=true');
}


$qySenha = mysqli_query($conexao,"select p.SENHA,p.USER,q.TIPO from login p left outer join cad_empresa q on (q.cod = p.COD_EMPRESA) where upper(p.USER) = upper('$nome') and p.SENHA <> 'NULL'"); 	

while($SenhaArray = mysqli_fetch_assoc($qySenha)) {
	$cont ++;
	if($password == $SenhaArray["SENHA"]){
		if ($SenhaArray["TIPO"] == 1) {
			header('Location: industriaInicial.php',TRUE,307);
			$_SESSION['tipo'] = 1;
		}else {
			header('Location: comercioInicial.php',TRUE,307);
			$_SESSION['tipo'] = 2;
		} 
	}else {
		header('Location: login.php?error=true');
	}		
}

if ($cont == 0) {

header('Location: login.php?error=true');
}
include("rodape.php");
?>
