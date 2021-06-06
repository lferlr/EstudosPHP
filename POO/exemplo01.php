<?php

class Pessoa {
  //Atributos
  public $nome;

  //Método da classe
  public function falar(){
    return "O meu nome é " . $this->nome;
  }
}

$lucas = new Pessoa();
$lucas->nome = "Lucas Fernandes";
echo $lucas->falar();

?>