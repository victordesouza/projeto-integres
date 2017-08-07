<?php require_once("cabecalho.php"); ?>

<h2 style="text-align:center">Cadastro de Produtos</h2>

<div class="container">

  <div class="col-sm-6">
    <div class="form-group" style="margin-top:10px">
      <?php require_once("categorias.php"); ?>
    </div>
    <span><h4>Informações Técnicas</h4></span>

    <div class="form-group">
      <input name="descProduto" type="text" class="form-control" style="width:90%" id="descProduto" placeholder="Descrição do Produto">
    </div>

    <div class="form-group">
        <input type="text" name="ncm" class="form-control metade" id="cep1" style="margin-left:5px" placeholder="NCM">
        <input type="text" name="ean" class="form-control metade" placeholder="EAN">
    </div>
    <div class="form-group">
        <input type="text" name="composicao" style="width:90%" class="form-control" placeholder="Composição">
    </div>


    <div class="form-group">
      <label for="unMedida" style="margin-left:50px">Unidade de Medida:</label>
      <select class="form-control cat" name="unMedida">
        <option value="">mm / Gr</option>
        <option value="">mm / Kg</option>
        <option value="">cm / Gr</option>
        <option value="" hidden="" selected="">cm / Kg</option>
        <option value="">m / Gr</option>
        <option value="">m / Kg</option>
      </select>
    </div>

  </div>

<script type="text/javascript">
function mostraVariacao(){
  if (document.getElementById('chave').checked) {
    document.getElementById('tipoVar').style.display = "inline";
  }else{
    document.getElementById('tipoVar').style.display = "none";
  }
}
</script>

  <div class="col-sm-6">
    <span><h4> Variações </h4></span>

    <div class="form-group">
      <label class="switch" style="margin:0px">
        <input type="checkbox" class="chave" id="chave" onchange="mostraVariacao()">
        <span class="slider round"></span>
      </label>

      <select class="form-control" id="tipoVar" style="margin-left:30%;display:none" name="tipoVar">
        <option value="" hidden="">Tipo:</option>
        <option value="cor">Cor</option>
        <option value="tamanho">Tamanho</option>
        <option value="ambas">Ambas</option>
      </select>
    </div>
    <?php require_once("inputImage.html"); ?>
    <?php require("inputImage.php"); ?>

    <div class="form-group" style="margin-top:100px">
      <button class="btn btn-default" style="float:left" type="button" onclick="window.location.href='index.php'">Voltar</button>
      <button class="btn btn-info" style="float:right" type="submit" form="salvar">SALVAR</button>
    </div>

  </div>

  </div>
</div>
