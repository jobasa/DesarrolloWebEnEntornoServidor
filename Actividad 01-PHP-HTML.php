<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actividad 01 - PHP - HTML</title>
    <style media="screen" type="text/css">
      div{
        width: 19.6%;
        height: 141px;
        display: inline-block;
        padding: 10px 3% 20px ;
        margin: 2px 2px  2px ;
        text-align: center;
      }

    </style>
  </head>
  <body>
    <div class="title">
      <h1><center>Actividad 01 - PHP - HTML</center></h1>
    </div>
    <?php
      /*Bucle for que lista desde el 0 hasta el 255 de uno en uno */
      for ($i=0; $i < 256 ; $i++) {
        echo "<div  style= 'background-color: rgb(0,$i,0)'>rgb(0,$i,0)</div>";
      }
    ?>
  </body>
</html>
