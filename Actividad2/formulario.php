<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><center>Actividad 02 - PHP - FORM</center></h1>
    <form class="" action="formulario2.php" method="post" onsubmit="return validar()">
      <?php
        echo "<h3>Inserta numeros</h3>".
          "<fieldset class='caja'>".
          "RGB: <input type='text' name='GGG' value='' id='rgb1'> <br>
          RGB: <input type='text' name='TTT' value='' id='rgb2'><br>
          RGB: <input type='text' name='QQQ' value='' id='rgb3'><br>
          <input type='submit' value='Enviar'>
          </fieldset>";


       ?>

    </form>
    <script type="text/javascript" src="formulariocomprobacion.js"></script>

    </script>
  </body>
</html>
