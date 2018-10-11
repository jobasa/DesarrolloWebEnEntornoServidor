<?php

//Recoger parametros del post
$rgb1=$_POST['GGG'];
$rgb2=$_POST['TTT'];
$rgb3=$_POST['QQQ'];

//Comprobando si las variables son enteras
if (!is_numeric($rgb1)) {
  echo "EL RGB1 NO ES ENTERO.";
}elseif (!is_numeric($rgb2)) {
  echo "EL RGB2 NO ES ENTERO.";
}elseif (!is_numeric($rgb3)) {
  echo "EL RGB3 NO ES ENTERO.";
}else{
  // Calcular el valor hexadecimal. El dechex sirve para pasar de DECimal a HEXadecimal
  echo "Hexadecimal: ".dechex($rgb2);
  echo "<div  style= 'background-color: rgb(0,$rgb2,0)'>rgb(0,$rgb2,0)</div>";
}



 ?>
