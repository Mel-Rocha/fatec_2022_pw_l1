<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./style3.css" media="screen" />
    <title>Exercicio3</title>
  </head>
  <body>

    <?php

    #header("Content-type: text/html; charset=utf-8");

    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $num3 = $_POST['n3'];

    $soma = $num1 + $num2 + $num3;

    echo "Soma: $soma";


    ?>

  </body>
</html>