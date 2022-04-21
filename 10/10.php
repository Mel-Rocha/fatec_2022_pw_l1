





<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./style10.css" media="screen" />
    <title>Exercicio10</title>
  </head>
  <body>

    <?php

    #header("Content-type: text/html; charset=utf-8");

    $dia = $_POST['dia'];


    if ($dia == 1){
      echo "O dia $dia, corresponde ao domingo";
    } elseif ($dia == 2){
      echo "O dia $dia, corresponde a segunda-feira";
    }elseif ($dia == 3){
      echo "O dia $dia, corresponde a terça-feira";
    } elseif ($dia == 4){
      echo "O dia $dia, corresponde a quarta-feira";
    } elseif ($dia == 5){
      echo "O dia $dia, corresponde a quinta-feira";
    } elseif ($dia == 6){
      echo "O dia $dia, corresponde a sexta-feira";
    } elseif ($dia == 7){
      echo "O dia $dia, corresponde a sábado";
    } elseif ($dia > 7){
      echo "Digite um valor entre 1 e 7";
    }



    ?>
  </body>
</html>