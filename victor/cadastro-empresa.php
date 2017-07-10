<?php require_once("FuncoesBanco.php");?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Empresa</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
<!-- MASKS -->
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
    <?php if(isset($_SESSION['danger_empresa'])){ ?>
    	<p align="center" style="color: white;background-color: #f47c7c;"><?=$_SESSION['danger_empresa'] ?></p><br>
    <?php }?>
    <div class="container">

    <div class="cadastro">
        <navbar-brand> <img src="logo.png"/ id="logo-principal"></navbar-brand>
    </div>
<form action="verificaCadastro.php" method="post" id="salvar">
<div class="col-sm-6">
  <div class="form-group">
      <select name="tipoCadastro" required class="selectpicker btn btn-default dropdown-toggle">
          <option value="" disabled selected hidden>Tipo:</option>
          <option value="1">Indústria/Distribuidor</option>
          <option value="2">E-commerce</option>
      </select>
  </div>

  <div class="form-group">
    <input name="rSocialEmpresa" type="text" class="form-control" id="razao" placeholder="Razão Social">
  </div>

  <div class="form-group" >
    <input name="cnpjEmpresa" type="text" placeholder="CNPJ" class="form-control" id="cnpj">
  </div>

  <span> <h4> Endereço Correspondência </h4></span>
    <div class="form-group">
        <input type="text" name="cepEmpresa" class="form-control cep" id="cep1" placeholder="Cep">
    </div>
    <div class="form-group">
        <input type="text" name="endCobrancaEmpresa" class="form-control col-sm-4 endereco" id="end-cor" placeholder="Endereço Corresp.">
        <input type="number" class="form-control end-num" name="numEndEmpresa" placeholder="número">
    </div>
    <div class="form-group">
        <input type="text" name="bairroCobrancaEmpresa" class="form-control col-sm-4 bairro" id="bairro-cor" placeholder="Bairro">
    </div>
    <div class="form-group">
        <input type="text" name="cidadeCobrancaEmpresa" class="form-control col-sm-4 cidade" id="cidade-cor" placeholder="Cidade">
    </div>
    <div class="form-group">
        <select name="estadoCobrancaEmpresa" required class="btn btn-default">
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
        </select>
    </div>

    <div class="form-group">
        <input type="text" id="telefone1" name="foneEmpresa" class="form-control col-sm-4" placeholder="Telefone">
    </div>
    <div class="form-group">
        <input type="text" name="emailEmpresa" style="margin-top:15px;width:100%;height:34px;padding: 6px 12px;border: 1px solid #ccc;border-radius: 4px;" placeholder="E-mail Responsável Legal">
    </div>
</div>
<div class="col-sm-6">
  <span><h4>Endereço Cobrança </h4></span>
  <div class="radio">

    <input type="checkbox" name="msm-end-cob" style="margin-botton:15px"> Mesmo de correspondência
    <div class="form-group">
        <input type="text" class="form-control cep" name="cepUtilizador" id="cep2" placeholder="Cep">
    </div>
    <div class="form-group">
        <input type="text" class="form-control col-sm-4 endereco" name="endCobrancaUtilizador" id="end-cob" placeholder="Endereço Corresp.">
        <input type="number" class="form-control end-num" name="numEndUtilizador" placeholder="número">
    </div>
    <div class="form-group">
        <input type="text" class="form-control col-sm-4 bairro" name="bairroCobrancaUtilizador" id="bairro-cob" placeholder="Bairro">
    </div>
    <div class="form-group">
        <input type="text" class="form-control col-sm-4 cidade" name="cidadeCobrancaUtilizador" id="cidade-cob" placeholder="Cidade">
    </div>
    <div class="form-group">
        <select name="estadoCobrancaUtilizador" required class="btn btn-default">
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
        </select>
    </div>

    <div class="form-group">
        <input type="text" id="telefone2" name="foneUtilizador" class="form-control col-sm-4" placeholder="Telefone">
    </div>
  </div>
</div>
<div class="col-sm-6">
  <span><h4>Login </h4></span>
    <div class="form-group">
        <input type="email" class="form-control" name="login" placeholder="E-mail Login">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="senha" id="pass-log" placeholder="Senha">
    </div>

    <div class="form-group">
      <button class="btn btn-default" type="button" onclick="window.location.href=''">LIMPAR</button>
      <button class="btn btn-info" style="margin-left: 40px" type="submit" form="salvar">SALVAR</button>
    </div>
</div>
</form>

</body>
</html>
