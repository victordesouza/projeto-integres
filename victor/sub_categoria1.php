<?php require_once("cabecalho.php");
      require_once("class/Categoria.php");

  $id_categoria = $_REQUEST['id_categoria'];

  $resultado = listaSubCategoria1($id_categoria);

  while ($linhaSub1 = mysqli_fetch_assoc($resultado)) {
    $sub_categoria1[] = array(
      'id' => $linhaSub1['id'],
      'nome_sub1' => $linhaSub1['nome'];
    );
  }

	echo(json_encode($sub_categoria1));

?>
