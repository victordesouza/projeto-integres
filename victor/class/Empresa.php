<?php
require_once("FuncoesBanco.php");
class Empresa {

  public $cod;

  public $tipo;
  public $rSocial;
  public $cnpj;
  public $emailE;
  public $login;
  public $senha;
  public $mesmoEnd;

  public $endE;
  public $cepE;
  public $numE;
  public $bairroE;
  public $cidadeE;
  public $estadoE;
  public $foneE;

  public $endC;
  public $cepC;
  public $numC;
  public $bairroC;
  public $cidadeC;
  public $estadoC;
  public $foneC;

public function ValidaMesmoEnd(){
  if ($this->mesmoEnd == 'on') { // caso for o mesmo endereco de entrega
    $this->foneC = $this->foneE;
    $this->endC = $this->endE;
    $this->bairroC = $this->bairroE;
    $this->cidadeC = $this->cidadeE;
    $this->estadoC = $this->estadoE;
    $this->numC = $this->numE;
    $this->cepC = $this->cepE;
  }
  return $this;
}

public function VerificaCamposVazios(){
  if (empty($this->rSocial) || empty($this->cnpj) || empty($this->emailE) || empty($this->foneE) || empty($this->endE) ||
      empty($this->bairroE) || empty($this->cidadeE) || empty($this->estadoE) || empty($this->cepE) || empty($this->login) ||
      empty($this->senha) || empty($this->foneC) || empty($this->endC) || empty($this->bairroC) || empty($this->cidadeC) ||
      empty($this->estadoC) || empty($this->cepC) || empty($this->numE) || empty($this->numC)) {
        $_SESSION['campo_vazio'] = "1";
  }
}

}

 ?>
