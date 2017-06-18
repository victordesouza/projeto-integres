<?php
include("ConectaBanco.php");
					//campos da Empresa
$tipo = $_POST['tipoCadastro'];
$rSocial = $_POST['rSocialEmpresa'];
$cnpj = $_POST['cnpjEmpresa'];
$emailE = $_POST['emailEmpresa'];
$foneE = $_POST['foneEmpresa'];
$enderecoE = $_POST['endCobrancaEmpresa'];
$bairroE = $_POST['bairroCobrancaEmpresa'];
$cidadeE = $_POST['cidadeCobrancaEmpresa'];
$estadoE = $_POST['estadoCobrancaEmpresa'];
$cepE = $_POST['cepEmpresa'];
$numE = $_POST['numEndEmpresa'];
						//campos do usuario
$user = $_POST['login'];
$senha = $_POST['senha'];
$fone = $_POST['foneUtilizador'];
$endereco = $_POST['endCobrancaUtilizador'];
$bairro = $_POST['bairroCobrancaUtilizador'];
$cidade = $_POST['cidadeCobrancaUtilizador'];
$estado = $_POST['estadoCobrancaUtilizador'];
$cep = $_POST['cepUtilizador'];
$num = $_POST['numEndUtilizador'];

$mesmoEnd = $_POST['msm-end-cob'];

if ($mesmoEnd == 'on') {
  $fone = $foneE;
  $endereco = $enderecoE;
  $bairro = $bairroE;
  $cidade = $cidadeE;
  $estado = $estadoE;
  $num = $numE;
  $cep = $cepE;
}

//echo $tipo."<br>".$rSocial."<br>".$cnpj."<br>".$emailE."<br>".$foneE."<br>".$enderecoE."<br>".$bairroE."<br>".$cidadeE."<br>".$estadoE."<br>".$cepE;

if (empty($rSocial) || empty($cnpj) || empty($emailE) || empty($foneE) || empty($enderecoE) ||
    empty($bairroE) || empty($cidadeE) || empty($estadoE) || empty($cepE) || empty($user) ||
    empty($senha) || empty($fone) || empty($endereco) || empty($bairro) || empty($cidade) ||
    empty($estado) || empty($cep) || empty($numE) || empty($num)) {
	header("Location: cadastro-empresa2.php?error=true");
}else{

// salva cadastroda empresa
mysqli_query($conexao,"insert into cad_empresa (TIPO,R_SOCIAL,CNPJ,ENDERECO,NUMERO,BAIRRO,CIDADE,ESTADO,CEP,FONE,EMAIL_RESP_LEGAL)
value ('$tipo','$rSocial','$cnpj','$enderecoE','$numE','$bairroE','$cidadeE','$estadoE','$cepE','$foneE','$emailE')");

$empresaqy = mysqli_query($conexao,"select max(COD) from cad_empresa");
$empresaArray = mysqli_fetch_assoc($empresaqy);
$empresa = $empresaArray["max(COD)"];

// salva informações do utilizador
mysqli_query($conexao,"insert into login (COD_EMPRESA,USER,SENHA,FONE,ENDERECO,NUMERO,BAIRRO,CIDADE,ESTADO,CEP)
VALUES ('$empresa','$user','$senha','$fone','$endereco','$num','$bairro','$cidade','$estado','$cep')");
echo $empresa."<br>".$user."<br>".$senha."<br>".$fone."<br>".$endereco."<br>".$num."<br>".$bairro."<br>".$cidade."<br>".$estado."<br>".$cep;
header("Location: login.php");
}
?>
