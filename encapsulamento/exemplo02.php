<?php

class Pessoa {
  //Publico todos consegue ver
  public $nome = "Lucas Rodrigues";
  //Somente quem tiver dentro da classe (metodos) ou quem herdar
  protected $idade = 20;
  //Mais protegido do que protected, somente a classe consegue visualizar a senha
  private $senha = "123";

  public function verDados() {
    echo $this -> nome . "<br>";
    echo $this -> idade . "<br>";
    echo $this -> senha . "<br>";
  }

}

class Programador extends Pessoa {
  
  public function verDados() {
    echo get_class($this) . "<br>";
    echo $this -> nome . "<br>";
    echo $this -> idade . "<br>";
    echo $this -> senha . "<br>";
  }

}

$objeto = new Programador();
//echo $objeto->nome . "<br>";
$objeto -> verDados();

?>