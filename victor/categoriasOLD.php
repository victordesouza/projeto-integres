<?php
require_once("cabecalho.php");
require_once("class/Categoria.php");

$categoria = new Categoria();
$resultadoCat = $categoria->listaCategoria();
?>

<h2 style="margin-left: 10%;width: 70%" >Cadastro de Produtos</h2>
<table style="margin-left: 5%">
	<form action="" style="margin-left: 15%">
	<tr>
		<td>Categoria:  </td><td>
			<select style="margin-left: 30%" id="mod" onchange="this.form.submit()" name="categorias">
				<option value="0">Selecionar ...</option>
		<?php while ($categorias = mysqli_fetch_assoc($resultadoCat)) { ?>
				<option value="<?=$categorias['ID'];?>" <?php if(isset($_GET['categorias']) && $_GET['categorias']==$categorias['ID']){echo "selected";}?>><?=$categorias['NOME'];?></option>
		<?php }?>
		</select>
		</td>
	</tr>
	<tr>
		<td>Sub-Categoria-Primária:  </td><td>
			<select style="margin-left: 30%" id="mod" onchange="this.form.submit()" name="subCat1">
					<option value="0">Selecionar ...</option>
		<?php
		if (isset($_GET['categorias']) && $_GET['categorias'] != 0) {
			$cat = $_GET['categorias'];
			$resultadoSub1 = $categoria->listaSubCategoria1($cat);
			while ($subCat1 = mysqli_fetch_assoc($resultadoSub1)) {?>
					<option value="<?=$subCat1['ID'];?>" <?php if(isset($_GET['subCat1']) && $_GET['subCat1']==$subCat1['ID']){echo "selected";}?> ><?=$subCat1['NOME'];?></option>
			<?php }} ?></select>
		</td>
	</tr>
	<tr>
		<td>Sub-Categoria-Secundária:  </td><td>
			<select style="margin-left: 30%" id="mod" onchange="this.form.submit()" name="subCat2">
				<option value="0">Selecionar ...</option>
			<?php
			if ((isset($_GET['categorias']) && $_GET['categorias'] != 0) || isset($_GET['subCat1']) && $_GET['subCat1'] != 0) {
				$subCategoria1 = $_GET['subCat1'];
				$resultadoSub2 = $categoria->listaSubCategoria2($subCategoria1);
				while ($subCat2 = mysqli_fetch_assoc($resultadoSub2)) {?>
					<option value="<?=$subCat2['ID'];?>" <?php if(isset($_GET['subCat2']) && $_GET['subCat2']==$subCat2['ID']){echo "selected";}?> ><?=$subCat2['NOME'];?></option>
				<?php }} ?></select>
		</td>
	</tr>
	</form>
</table>
