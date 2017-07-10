<?php 				// CADASTRA PRODUTOS DAS INDÚSTRIAS COM E SEM VARIAÇÃO, SENDO POSSÍVEL UPAR IMAGENS E LINK DE VIDEOS
require_once("categorias.php");?>

<div style="margin-left: 5%">
<br>

<form action="salvaProduto.php" method="post"  enctype = "multipart / form-data">

Características:<input style="margin-left: 3%;width: 50%" type="text" id="corpotxt" name="descricao" <?php if(isset($_POST['descricao'])){$descricao=$_POST['descricao']; echo "value=$descricao";}?>>
<br>
<span style="margin-right: 8px;">Selecione suas Medidas:</span>
<select name="unMedida" id="mod">
	<option>cm</option>
	<option <?php if(isset($_POST['unMedida']) && $_POST['unMedida'] == 'mm'){$unMedida=$_POST['unMedida']; echo "selected";}?>>mm</option>
</select>
<span style="margin-left: 4%;margin-right: 1%">Peso:</span>
<select name="unPeso" id="mod">
	<option <?php if(isset($_POST['unPeso']) && $_POST['unPeso'] == 'Kg'){$unMedida=$_POST['unPeso']; echo "selected";}?>>Kg</option>
	<option <?php if(isset($_POST['unPeso']) && $_POST['unPeso'] == 'L'){$unMedida=$_POST['unPeso']; echo "selected";}?>>L</option>
	<option <?php if(isset($_POST['unPeso']) && $_POST['unPeso'] == 'gr'){$unMedida=$_POST['unPeso']; echo "selected";}?>>gr</option>
</select>

<p style="line-height: 200%">Características Técnicas:</p>

<span>Número de Volumes:</span>
<select name="volumes" onchange="this.form.submit()">
	<option <?php if(isset($_POST['volumes']) && $_POST['volumes'] == '01'){echo "selected";}?>>01</option>
	<option <?php if(isset($_POST['volumes']) && $_POST['volumes'] == '02'){echo "selected";}?>>02</option>
	<option <?php if(isset($_POST['volumes']) && $_POST['volumes'] == '03'){echo "selected";}?>>03</option>
	<option <?php if(isset($_POST['volumes']) && $_POST['volumes'] == '04'){echo "selected";}?>>04</option>
	<option <?php if(isset($_POST['volumes']) && $_POST['volumes'] == '05'){echo "selected";}?>>05</option>
	<option <?php if(isset($_POST['volumes']) && $_POST['volumes'] == '06'){echo "selected";}?>>06</option>
	<option <?php if(isset($_POST['volumes']) && $_POST['volumes'] == '07'){echo "selected";}?>>07</option>
</select><br>

<?php

if (isset($_POST['volumes'])) {
	$x=0;
	for ($i=$_POST['volumes']; $i > 0 ; $i--) {
		$x ++;
		$largura = '';
		$altura = '';
		$profundidade = '';
		$peso = '';

		if(isset($_POST["largura$x"])){
			$largura = $_POST["largura$x"];
			$altura = $_POST["altura$x"];
			$profundidade = $_POST["profundidade$x"];
			$peso = $_POST["peso$x"];
		}
		echo '<p>Volume'.$x.' </p>
	<span style="margin-left:5%">Largura:</span><input type="number" id="corpotxt" name="largura'.$x.'" value="'.$largura.'"><br>
	<span style="margin-left:5%">Altura:</span><input type="number" id="corpotxt" name="altura'.$x.'" value="'.$altura.'"><br>
	<span style="margin-left:5%">Profundidade:</span><input type="number" id="corpotxt" name="profundidade'.$x.'" value="'.$profundidade.'"><br>
	<span style="margin-left:5%">Peso:</span><input type="number" id="corpotxt" name="peso'.$x.'" value="'.$peso.'"><br>';
	}
}else{
	$largura = '';
	$altura = '';
	$profundidade = '';
	$peso = '';
	if(isset($_POST["largura1"])){
		$largura = $_POST["largura1"];
		$altura = $_POST["altura1"];
		$profundidade = $_POST["profundidade1"];
		$peso = $_POST["peso1"];
	}
	echo '<p>Volume1</p>
	<span style="margin-left:5%">Largura:</span><input type="number" id="corpotxt" name="largura1" value="'.$largura.'"><br>
	<span style="margin-left:5%">Altura:</span><input type="number" id="corpotxt" name="altura1" value="'.$altura.'"><br>
	<span style="margin-left:5%">Profundidade:</span><input type="number" id="corpotxt" name="profundidade1" value="'.$profundidade.'"><br>
	<span style="margin-left:5%">Peso:</span><input type="number" id="corpotxt" name="peso1" value="'.$peso.'"><br>';
}

?>


<span>Cubagem:</span><input type="number" id="corpotxt" name="cubagem" <?php if(isset($_POST['cubagem'])){$cubagem=$_POST['cubagem']; echo "value=$cubagem";}?>><br>
<span>Peso sem embalagem:</span><input type="number" id="corpotxt" name="pesosem" <?php if(isset($_POST['pesosem'])){$pesosem=$_POST['pesosem']; echo "value=$pesosem";}?>><br>
<span>Peso com embalagem:</span><input type="number" id="corpotxt" name="pesocom" <?php if(isset($_POST['pesocom'])){$pesocom=$_POST['pesocom']; echo "value=$pesocom";}?>><br>
<span>Composição:</span><input type="number" id="corpotxt" name="composicao" <?php if(isset($_POST['composicao'])){$composicao=$_POST['composicao']; echo "value=$composicao";}?>><br>
<span>NCM:</span><input type="number" id="corpotxt" name="ncm" <?php if(isset($_POST['ncm'])){$ncm=$_POST['ncm']; echo "value=$ncm";}?>><br>
<span>EAN:</span><input type="number" id="corpotxt" name="ean" <?php if(isset($_POST['ean'])){$ean=$_POST['ean']; echo "value=$ean";}?>><br>

<br>
<span style="margin-right: 1%">Com Variação:</span>
<select onchange="this.form.submit()" name="variacao">
	<option <?php if(isset($_POST['variacao']) && $_POST['volumes'] == 'Não'){echo "selected";}?>>Não</option>
	<option <?php if(isset($_POST['variacao']) && $_POST['variacao'] == 'Sim'){echo "selected";}?>>Sim</option>
</select>


<span style="margin-right: 2%;margin-left: 2%;<?php if(!isset($_POST['variacao'])||$_POST['variacao']=='Não'){echo "display:none";}?>" >Tipo:</span>
<select onchange="this.form.submit()" name="tipo" <?php if(!isset($_POST['variacao'])||$_POST['variacao']=='Não'){echo "style='display:none'";}?>>
	<option <?php if(isset($_POST['tipo']) && $_POST['tipo'] == 'Cor'){echo "selected";}?>>Cor</option>
	<option <?php if(isset($_POST['tipo']) && $_POST['tipo'] == 'Tamanho'){echo "selected";}?>>Tamanho</option>
	<option <?php if(isset($_POST['tipo']) && $_POST['tipo'] == 'Peso'){echo "selected";}?>>Peso</option>
</select>

<?php
if ((isset($_POST['variacao']) && $_POST['variacao'] == 'Não') || !isset($_POST['variacao'])) {
?>
<br><br>
<div class="img">
	<label for="imagem1">
		<img id="img1" src="img/img.png" width="80px" height="80px" name="img1" <?php if(isset($_POST['img1'])){ ;}?> />
	</label>
	<input type="file" id="imagem1" accept="image/*" hidden="" name="imagem1"
	onchange="document.getElementById('img1').src = window.URL.createObjectURL(this.files[0])">
</div>
<div class="img">
	<label for="imagem2">
		<img id="img2" src="img/img.png" width="80px" height="80px" name="img2"/>
	</label>
	<input type="file" id="imagem2" accept="image/*" hidden="" name="imagem2"
	onchange="document.getElementById('img2').src = window.URL.createObjectURL(this.files[0])">
</div>
<div class="img">
	<label for="imagem3">
		<img id="img3" src="img/img.png" width="80px" height="80px" name="img3"/>
	</label>
	<input type="file" id="imagem3" accept="image/*" hidden="" name="imagem3"
	onchange="document.getElementById('img3').src = window.URL.createObjectURL(this.files[0])">
</div>

<div class="video">
<input type="text" name="linkVideo" placeholder="Link do Video (YouTube)" style="width: 100%;border:1px solid black;height: 26px;font-size: 14px" <?php if(isset($_POST['linkVideo'])){$video=$_POST['linkVideo'];echo "value='".$video."'";}?>>
</div>
<?php }?>


<br><button>Atualizar</button>
</form>
<?php
if (isset($_POST['volumes'])) {
	$_SESSION['volumes'] = $_POST['volumes'];
}
?>

<br><br>

</div>
