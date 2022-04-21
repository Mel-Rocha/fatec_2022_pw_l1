

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./style9.css" media="screen" />
    <title>Exercicio9</title>
  </head>
  <body>

    <?php

    #header("Content-type: text/html; charset=utf-8");

    $num = $_POST['num'];


    if ($num % 2 == 0) {
      echo "O número $num, é par";
  
    } elseif ($num % 2 == 1) {
      echo "O número $num, é impar";
    }



    ?>


  </body>
</html>