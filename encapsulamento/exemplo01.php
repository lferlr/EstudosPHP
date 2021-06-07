<?php

class Pessoa {
  //Publico todos consegue ver
  public $nome = "Lucas Rodrigues";
  //Somente quem tiver dentro da classe (metodos) ou quem herdar
  protected $idade = 20;
  //Mais protegido do que protected, somente a classe consegue vizualisar a senha
  private $senha = "123";

  public function verDados() {
    echo $this -> nome . "<br>";
    echo $this -> idade . "<br>";
    echo $this -> senha . "<br>";
  }

}

$objeto = new Pessoa();
//echo $objeto->nome . "<br>";
$objeto -> verDados();

?>