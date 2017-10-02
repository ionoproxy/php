<?php
  // Función que nos devolverá la tabla con los diferentes campos comprobados
  function convertirTabla(){

    $var = null;
    $var = [null, 0, true, false, "0", "", "foo", array()];
    define("MAXIMO_CASOS", 9);

    echo "<table>
          <th>Contenido de \$var</th>
          <th>isset(\$var)</th>
          <th>empty(\$var)</th>
          <th>(bool) \$var</th>
          <tbody>
    ";

    for ($i=0; $i < MAXIMO_CASOS; $i++) {

      if($i == MAXIMO_CASOS - 1){
        unset($var);
      }

        echo "
        <tr style=\"text-align:center;\">
        <td>\$var = ". (is_array($var[$i]) ? 'Array' : $var[$i] . '') . ";</td>
        <td>". (boolval(isset($var[$i])) ? 'true' : 'false') ."</td>
        <td>". (boolval(empty($var[$i])) ? 'true' : 'false') ."</td>
        <td>". (boolval((bool) $var[$i]) ? 'true' : 'false') ."</td>
        </tr>";

    }

    echo "
    </tbody>
    </table>";

  }

  convertirTabla();

 ?>
