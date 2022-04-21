


<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./style6.css" media="screen" />
    <title>Exercicio6</title>
  </head>
  <body>

    <?php

    #header("Content-type: text/html; charset=utf-8");

    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];

    if ($num1 > $num2) {
      echo "O 1º número ($num1), é maior";
  
    } elseif ($num2 > $num1) {
      echo "O 2º número ($num2), é maior";
    } else {
      echo "Os valores são iguais";
    }
  
  
  


    ?>

  </body>
</html>