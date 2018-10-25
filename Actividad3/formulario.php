<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><center>Actividad 03 - PHP - FORM. DESTACA PALABRAS</center></h1>
    <form class="" action="formulariocomprobacion.php" method="post">
      <?php
      echo "<h3>Completa las casillas: </h3>".
        "<fieldset class='caja'>".
        "Nombre: <input type='text' name='nombre' value='' id='nombre'> <br>
        Texto Largo: <input type='text' name='textoLargo' value='' id='textoLargo'><br>
        Palabras a destacar: <input type='text' name='destacar' value='' id='destacar'><br>
        <input type='submit' value='Enviar'>
        </fieldset>";



       ?>

    </form>

  </body>
</html>
