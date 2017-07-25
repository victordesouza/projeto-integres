<?php
require_once("FuncoesBanco.php");

class Categoria {

  public $id;
  public $nome;
  public $nivel;
  public $pai;

  public function listaCategoria(){
    $resultado = Conecta("select ID,NOME,NIVEL,PAI from categorias where PAI = '0'");
    return $resultado;
  }

  public function listaSubCategoria1($cat){
    $resultado = Conecta("select ID,NIVEL,NOME,PAI from categorias where PAI = '$cat'");
    return $resultado;
  }

  public function listaSubCategoria2($sub1){
    $resultado = Conecta("select ID,NIVEL,NOME,PAI from categorias where PAI = '$sub1'");
    return $resultado;
  }

}
?>
