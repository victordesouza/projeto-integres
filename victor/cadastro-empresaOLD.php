
<?php require_once("FuncoesBanco.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro-empresa.css">
	<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript" /></script>
	<script type="text/javascript">
	$(document).ready(function(){$("#cnpj").mask("99.999.999/9999-99");});
	$(document).ready(function(){$("#cep1").mask("99.999-999");});
	$(document).ready(function(){$("#telefone1").mask("(99) 9999-9999");});
	$(document).ready(function(){$("#cep2").mask("99.999-999");});
	$(document).ready(function(){$("#telefone2").mask("(99) 9999-9999");});
	</script>
</head>
<body>

<?php if(array_key_exists("error",$_GET) && $_GET["error"]=="true"){ ?>
	<p align="center" style="color: white;background-color: #f47c7c;">Todos os Campos Precisam ser Preenchidos</p><br>
<?php }?>


<img width="6%" style="margin-left: 47%;margin-bottom: 10px" src="logo.png">

<div align="center" class="conteudo">
<form action="verificaCadastro.php" method="post" id="salvar">

<p>Selecione seu tipo de cadastro:</p>
<span><input type="radio" name="tipoCadastro" checked value="1">Industria/Distribuidor<input style="margin-left: 10%" type="radio" name="tipoCadastro" value="2">E-Commerce</span>
<p>Razão Social:<input style="width: 25%" type="text" name="rSocialEmpresa"></p>
<p>CNPJ:<input style="width: 16%" type="text" name="cnpjEmpresa" id="cnpj"></p>
<p>Endereço de Cobrança:<input style="width: 30%" type="text" name="endCobrancaEmpresa"></p>
<p>Bairro:<input style="width: 12%" type="text" name="bairroCobrancaEmpresa">Cidade:<input style="width: 17%" type="text" name="cidadeCobrancaEmpresa">
Estado:<select style="width: 7%;height: 22px" name="estadoCobrancaEmpresa">
	<option value="AC">AC</option>
	<option value="AL">AL</option>
	<option value="AP">AP</option>
	<option value="AM">AM</option>
	<option value="BA">BA</option>
	<option value="CE">CE</option>
	<option value="DF">DF</option>
	<option value="ES">ES</option>
	<option value="GO">GO</option>
	<option value="MA">MA</option>
	<option value="MT">MT</option>
	<option value="MS">MS</option>
	<option value="MG">MG</option>
	<option value="PA">PA</option>
	<option value="PB">PB</option>
	<option value="PR">PR</option>
	<option value="PE">PE</option>
	<option value="PI">PI</option>
	<option value="RJ">RJ</option>
	<option value="RN">RN</option>
	<option value="RS" selected="">RS</option>
	<option value="RO">RO</option>
	<option value="RR">RR</option>
	<option value="SC">SC</option>
	<option value="SP">SP</option>
	<option value="SE">SE</option>
	<option value="TO">TO</option>
</select></p>

<p>CEP:<input style="width: 10%" type="text" name="cepEmpresa" id="cep1"></p>
<p>Telefone:<input style="width: 14%" type="text" id="telefone1" name="foneEmpresa"></p>
<p>Responsável legal pela Empresa:<input style="width: 28%" type="text" name="respEmpresa"></p>
<p>E-mail:<input style="width: 28%" type="text" name="emailEmpresa"></p>
<p>Responsável por utilizar a plataforma:<input style="width: 28%" type="text" name="respUtilizador"></p>
<p>E-mail:<input style="width: 28%" type="text" name="emailUtilizador"></p>
<p>Telefone:<input style="width: 14%" type="text" id="telefone2" name="foneUtilizador"></p>
<p>Endereço de Cobrança:<input style="width: 30%" type="text" name="endCobrancaUtilizador"></p>
<p>Bairro:<input style="width: 12%" type="text" name="bairroCobrancaUtilizador">Cidade:<input style="width: 17%" type="text" name="cidadeCobrancaUtilizador">
Estado:<select style="width: 7%;height: 22px" name="estadoCobrancaUtilizador">
	<option value="AC">AC</option>
	<option value="AL">AL</option>
	<option value="AP">AP</option>
	<option value="AM">AM</option>
	<option value="BA">BA</option>
	<option value="CE">CE</option>
	<option value="DF">DF</option>
	<option value="ES">ES</option>
	<option value="GO">GO</option>
	<option value="MA">MA</option>
	<option value="MT">MT</option>
	<option value="MS">MS</option>
	<option value="MG">MG</option>
	<option value="PA">PA</option>
	<option value="PB">PB</option>
	<option value="PR">PR</option>
	<option value="PE">PE</option>
	<option value="PI">PI</option>
	<option value="RJ">RJ</option>
	<option value="RN">RN</option>
	<option value="RS" selected="">RS</option>
	<option value="RO">RO</option>
	<option value="RR">RR</option>
	<option value="SC">SC</option>
	<option value="SP">SP</option>
	<option value="SE">SE</option>
	<option value="TO">TO</option>
</select></p>
<p>CEP:<input style="width: 10%" type="text" name="cepUtilizador" id="cep2"></p>
<p>Login:<input style="width: 13%"  type="text" name="login">Senha:<input style="width: 13%" type="password" name="senha"></p>


<p>
<button class="button button5" type="button" onclick="window.location.href=''">LIMPAR</button>
<button class="button button5" style="margin-left: 60%" type="submit" form="salvar">SALVAR</button>
</p>
</form>
</div>
</body>
</html>
