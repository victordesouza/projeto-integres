<?php require_once("FuncoesBanco.php");
      require_once("class/Categoria.php");

  $categoria = new Categoria();
  
	$cat = $_REQUEST['cat'];

	$resultado = $categoria->listaSubCategoria1($cat);

	while ($linha = mysqli_fetch_assoc($resultado) ) {
		$sub_cat1[] = array(
			'id'	=> $linha['ID'],
			'nome_sub_categoria' => $linha['NOME'],
		);
	}

	echo(json_encode($sub_cat1));
