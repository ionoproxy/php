<?php

function variableGlobal($temp){
  global $probando;
  $probando = $temp;
}

variableGlobal("hola mundo");

echo "<pre>";
echo var_dump($GLOBALS);
echo "</pre>";
 ?>
