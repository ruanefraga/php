<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Capturando dados inseridos</title>
</head>
<body>
<div>
    <?php
      $c = 1;
        while($c <= 5){
          $valor = isset($_GET["v$c"]) ? $_GET["v$c"] : 0;
          echo "Valor $c = $valor <br/>";
          $c++;
        }
        echo "<a href='insercaoDeDados.php'>Voltar</a>";
    ?>
</div>
</body>
</html>
 