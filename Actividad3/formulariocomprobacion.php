<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $NOMBRE = (empty($_POST['nombre'])) ? ' El campo NOMBRE no tiene ningun valor' : $_POST['nombre'];
      $TEXTOLARGO = (empty($_POST['textoLargo'])) ? ' El campo TEXTO LARGO no tiene ningun valor' : $_POST['textoLargo'];
      $DESTACAR = (empty($_POST['destacar'])) ? ' El campo PALABRA A DESTACAR no tiene ningun valor' : $_POST['destacar'];

      echo "Nombre: ".$NOMBRE."<br>";
      echo "Texto Largo: ".$TEXTOLARGO."<br>";
      echo "Palabra a destacar: ".$DESTACAR."<br>";

      //Remplazar signos por espacios
      $signos = array(",",".",";","!","¡","?","¿");
      $remplazarPorEspacios = str_replace($signos," ", $DESTACAR);

      //Substituir con espacios
      $conEspacios = explode(" ", $remplazarPorEspacios);

      //Poner en negrita
      function negrita($negrita){
        return "<b>".$negrita."</b>";
      }

      $textoNegrita = array_map("negrita", $conEspacios);

      //Texto en negrita
      $texto = str_replace($conEspacios,$textoNegrita, $TEXTOLARGO);

      //Resultado
      echo "Texto final: ".$texto;

     ?>
  </body>
</html>
