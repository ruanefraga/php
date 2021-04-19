<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>While PHP</title>
</head>
<body>
<div>
    <?php
        $vInicial = $_GET["v1"];
        $vFinal = $_GET["v2"];
        $i = $_GET["inc"];
        while($vInicial <= $vFinal){
          echo $vInicial."<br/>";
          $vInicial += $i;
        }
        echo "<a href='while_entrada.php'>Voltar</a>";
    ?>
</div>
</body>
</html>
 