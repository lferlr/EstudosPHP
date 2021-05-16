<?php

// Como fazer um for (IGUAL COMO SEMPRE HAHAH)
for ($i = 0; $i <= 1000; $i += 5) {
  
  if($i > 200 && $i < 800) continue; //Condição para pular uma quantidade de numeros, de acordo com oq for dito

  if($i === 900) break; //Condição para para o for de acordo com o que colocar aqui
  
  echo $i . "<br>";

}

?>