<?php
require_once("FuncoesBanco.php");
require_once("class/Empresa.php");

$empresa = new Empresa();

$empresa->login = $_POST['login'];
$senha = $_POST['senha'];
$empresa->senha = md5($senha);
					//campos da Empresa
$empresa->tipo = $_POST['tipoCadastro'];
$empresa->rSocial = $_POST['rSocialEmpresa'];
$empresa->cnpj = $_POST['cnpjEmpresa'];
$empresa->emailE = $_POST['emailEmpresa'];
$empresa->foneE = $_POST['foneEmpresa'];
$empresa->endE = $_POST['endCobrancaEmpresa'];
$empresa->bairroE = $_POST['bairroCobrancaEmpresa'];
$empresa->cidadeE = $_POST['cidadeCobrancaEmpresa'];
$empresa->estadoE = $_POST['estadoCobrancaEmpresa'];
$empresa->cepE = $_POST['cepEmpresa'];
$empresa->numE = $_POST['numEndEmpresa'];
						//campos do usuario

$empresa->foneC = $_POST['foneUtilizador'];
$empresa->endC = $_POST['endCobrancaUtilizador'];
$empresa->bairroC = $_POST['bairroCobrancaUtilizador'];
$empresa->cidadeC = $_POST['cidadeCobrancaUtilizador'];
$empresa->estadoC = $_POST['estadoCobrancaUtilizador'];
$empresa->cepC = $_POST['cepUtilizador'];
$empresa->numC = $_POST['numEndUtilizador'];

$empresa->mesmoEnd = $_POST['msm-end-cob'];

$empresa = $empresa->ValidaMesmoEnd();

#  caso algum dos campos nao tenha sido preenchido
$empresa->VerificaCamposVazios();


if (isset($_SESSION['campo_vazio']) && $_SESSION['campo_vazio'] == "1") {
  $_SESSION['danger_empresa'] = "* Preencha todos os campos";
  header("Location: cadastro-empresa.php");

}else{
// salva cadastroda empresa
Conecta("insert into cad_empresa (TIPO,R_SOCIAL,CNPJ,ENDERECO,NUMERO,BAIRRO,CIDADE,ESTADO,CEP,FONE,EMAIL_RESP_LEGAL)
value ('$empresa->tipo','$empresa->rSocial','$empresa->cnpj','$empresa->endE','$empresa->numE','$empresa->bairroE',
'$empresa->cidadeE','$empresa->estadoE','$empresa->cepE','$empresa->foneE','$empresa->emailE')");

$empresaQy = Conecta("select max(COD) from cad_empresa");
$empresaArray = mysqli_fetch_assoc($empresaQy);
$codEmp = $empresaArray["max(COD)"];
$empresa->cod = $codEmp;

// salva informações do utilizador

Conecta("insert into login (COD_EMPRESA,USER,SENHA,FONE,ENDERECO,NUMERO,BAIRRO,CIDADE,ESTADO,CEP)
VALUES ('$empresa->cod','$empresa->login','$empresa->senha','$empresa->foneC','$empresa->endC','$empresa->numC','$empresa->bairroC','$empresa->cidadeC','$empresa->estadoC','$empresa->cepC')");

$_SESSION['success_login'] = "Empresa cadastrada com sucesso";
header("Location: login.php");
}
?>
