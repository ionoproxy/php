<?php

function variableGlobal(){
  global $probando;

  $probando = "Hola mundo!";
}

echo var_dump($GLOBALS) . "<br><br>";

variableGlobal();
echo $probando;


 ?>
