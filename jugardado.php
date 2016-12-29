<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> A12 </title>
  </head>
  <body>
    <?php
    include 'dado.php';
//nuevo objeto
    $tirardado = new dado();
    $tirardado->settirardado("");
    $tirardado->setminnumdado(0);
    $tirardado->setmaxnumdado(12);



    for ($i=0; $i <12 ; $i++) {
      echo "<br>";
      echo  $tirardado->gettirardado();
    }
     ?>
  </body>
</html>
