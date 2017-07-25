<?php
require_once("FuncoesBanco.php");
require_once("class/Empresa.php");

$empresa = new Empresa();

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
$empresa->login = SqlInjector($_POST['login']);;
$senha = $_POST['senha'];
$empresa->senha = md5($senha);
$empresa->foneC = $_POST['foneUtilizador'];
$empresa->endC = $_POST['endCobrancaUtilizador'];
$empresa->bairroC = $_POST['bairroCobrancaUtilizador'];
$empresa->cidadeC = $_POST['cidadeCobrancaUtilizador'];
$empresa->estadoC = $_POST['estadoCobrancaUtilizador'];
$empresa->cepC = $_POST['cepUtilizador'];
$empresa->numC = $_POST['numEndUtilizador'];

$empresa->mesmoEnd = $_POST['msm-end-cob'];

$empresa = $empresa->ValidaMesmoEnd();

$empresa->VerificaCamposVazios();

if (isset($_SESSION['campo_vazio']) && $_SESSION['campo_vazio'] == "1") {
  $_SESSION['danger_empresa'] = "* Preencha todos os campos";
  header("Location: cadastro-empresa.php");

}else{

$empresa->salvaCadEmpresa();

$empresa->salvaLogin();

$_SESSION['success_login'] = "Empresa cadastrada com sucesso";
header("Location: login.php");
}
?>
