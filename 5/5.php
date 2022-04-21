<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./style5.css" media="screen" />
    <title>Exercicio5</title>
  </head>
  <body>

    <?php

    #header("Content-type: text/html; charset=utf-8");

    $f = $_POST['f'];
    $c = 5.0 * ($f - 32.0) / 9.0;



    echo "$f º (fahrenheit), correspondem a $c º(graus celsius)";


    ?>

  </body>
</html>