<?php require_once("FuncoesBanco.php");
      require_once("class/Categoria.php");

  $categoria = new Categoria();

	$sub_cat1 = $_REQUEST['sub_cat1'];

	$resultado = $categoria->listaSubCategoria2($sub_cat1);

	while ($linha = mysqli_fetch_assoc($resultado) ) {
		$sub_cat2[] = array(
			'id'	=> $linha['ID'],
			'nome_sub_categoria' => $linha['NOME'],
		);
	}

	echo(json_encode($sub_cat2));
