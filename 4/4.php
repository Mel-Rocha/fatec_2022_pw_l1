<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./style4.css" media="screen" />
    <title>Exercicio4</title>
  </head>
  <body>

    <?php

    #header("Content-type: text/html; charset=utf-8");

    $c = $_POST['c'];
    $f = $c*(9.0/5.0)+32.0;



    echo "$c º (graus celsius), correspondem a $f º(fahrenheit)";


    ?>
  </body>
</html>