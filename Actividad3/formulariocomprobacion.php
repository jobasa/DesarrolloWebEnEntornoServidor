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

      //$arr = array("blue","red","green","yellow");
        //print_r(str_replace("red","pink",$arr,$i));





     ?>
  </body>
</html>
