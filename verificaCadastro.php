<?php
include("ConectaBanco.php");
					//campos da Empresa
$tipo = $_POST['tipoCadastro'];
$rSocial = $_POST['rSocialEmpresa'];
$cnpj = $_POST['cnpjEmpresa'];
$nomeE = $_POST['respEmpresa'];
$emailE = $_POST['emailEmpresa'];
$foneE = $_POST['foneEmpresa'];
$enderecoE = $_POST['endCobrancaEmpresa'];
$bairroE = $_POST['bairroCobrancaEmpresa'];
$cidadeE = $_POST['cidadeCobrancaEmpresa'];
$estadoE = @$_POST['estadoCobrancaEmpresa'];
$cepE = $_POST['cepEmpresa'];

						//campos do usuario
$user = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['respUtilizador'];
$email = $_POST['emailUtilizador'];
$fone = $_POST['foneUtilizador'];
$endereco = $_POST['endCobrancaUtilizador'];
$bairro = $_POST['bairroCobrancaUtilizador'];
$cidade = $_POST['cidadeCobrancaUtilizador'];
$estado = $_POST['estadoCobrancaUtilizador'];
$cep = $_POST['cepUtilizador'];

if (empty($tipo)||empty($rSocial)||empty($cnpj)||empty($nomeE)||empty($emailE)||empty($foneE)||empty($enderecoE)||empty($bairroE)||empty($cidadeE)||empty($estadoE)||empty($cepE)||empty($user)||empty($senha)||empty($nome)||empty($email)||empty($fone)||empty($endereco)||empty($bairro)||empty($cidade)||empty($estado)||empty($cep)) {
	header("Location: cadastro-empresa.php?error=true");
}else{


mysqli_query($conexao,"insert into cad_empresa (TIPO,R_SOCIAL,CNPJ,ENDERECO,BAIRRO,CIDADE,ESTADO,CEP,FONE,RESP_LEGAL,EMAIL_RESP_LEGAL) value ('$tipo','$rSocial','$cnpj','$enderecoE','$bairroE','$cidadeE','$estadoE','$cepE','$foneE','$nomeE','$emailE')"); 

$empresaqy = mysqli_query($conexao,"select max(COD) from cad_empresa");
$empresaArray = mysqli_fetch_assoc($empresaqy);
$empresa = $empresaArray["max(COD)"];


mysqli_query($conexao,"insert into login (COD_EMPRESA,USER,SENHA,NOME,EMAIL,FONE,ENDERECO,BAIRRO,CIDADE,ESTADO,CEP) values('$empresa','$user','$senha','$nome','$email','$fone','$endereco','$bairro','$cidade','$estado','$cep')");

header("Location: login.php");
}
?>