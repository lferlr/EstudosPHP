<?php

//Dentro de uma função coloque todos os paramentros que forem obrigatórios primeiro na declaração da função.
function ola($texto = "Mundo", $periodo = "Bom dia"){
  return "Olá $texto! $periodo! <br>";
}

echo ola("Mundo", "Bom dia");
echo ola("","Boa noite");
echo ola("Lucas", "Boa tarde");
echo ola("João", "");

?>